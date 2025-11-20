<?php

namespace MG\Services;

use Exception;
use MG\Core\MGClient;

class SearchService
{
    private MGClient $client;

    public function __construct()
    {
        $this->client = new MGClient();
    }

    /**
     * Search for hotels
     */
    public function search(array $params): array
    {
        // Perform search via MGClient
        $response = $this->client->searchHotel($params);

        return [
            "from_cache" => false,
            "data" => $response
        ];
    }

    /**
     * Extract session ID from search response
     */
    public function extractSessionID(array $searchData): string
    {
        // Session ID is typically in the response structure
        // Adjust based on actual MG API response format
        return $searchData["sessionID"] ?? $searchData["SessionID"] ?? $searchData["SessionId"] ?? "";
    }

    /**
     * Extract hotels array from search response
     */
    public function extractHotels(array $searchData): array
    {
        // Try various possible response structures
        $hotels = null;
        
        // MG API structure: hotels->hotel->[array of hotels]
        if (isset($searchData["hotels"]["hotel"]) && is_array($searchData["hotels"]["hotel"])) {
            $hotels = $searchData["hotels"]["hotel"];
            // If it's already a numeric array, return it
            if (isset($hotels[0])) {
                return $hotels;
            }
            // If it's a single hotel object, wrap in array
            if (isset($hotels["code"])) {
                return [$hotels];
            }
        }
        
        // Check if response itself is an array of hotels (numeric keys with code field)
        if (isset($searchData[0]) && is_array($searchData[0]) && (isset($searchData[0]["code"]) || isset($searchData[0]["HotelCode"]) || isset($searchData[0]["hotelCode"]))) {
            return $searchData;
        }
        
        // Check for nested structures
        if (isset($searchData["Result"]["Hotels"])) {
            $hotels = $searchData["Result"]["Hotels"];
        } elseif (isset($searchData["Result"]["Hotel"])) {
            $hotels = $searchData["Result"]["Hotel"];
        } elseif (isset($searchData["Hotels"])) {
            $hotels = $searchData["Hotels"];
        } elseif (isset($searchData["Hotel"])) {
            $hotels = $searchData["Hotel"];
        } elseif (isset($searchData["hotels"])) {
            $hotels = $searchData["hotels"];
        } elseif (isset($searchData["hotel"])) {
            $hotels = $searchData["hotel"];
        }
        
        // If not found, return empty array
        if ($hotels === null) {
            return [];
        }
        
        // If hotels is not an array, return empty array
        if (!is_array($hotels)) {
            return [];
        }
        
        // Handle single hotel object (wrap in array)
        if (isset($hotels["code"]) || isset($hotels["HotelCode"]) || isset($hotels["hotelCode"])) {
            return [$hotels];
        }
        
        // If hotels array contains "Hotel" key with nested structure
        if (isset($hotels["Hotel"]) && is_array($hotels["Hotel"])) {
            // If Hotel is a single item, wrap it in array
            if (isset($hotels["Hotel"]["code"]) || isset($hotels["Hotel"]["HotelCode"]) || isset($hotels["Hotel"]["hotelCode"])) {
                return [$hotels["Hotel"]];
            }
            // If Hotel is already an array of hotels
            return $hotels["Hotel"];
        }
        
        // If hotels array has numeric keys, return as is
        // If hotels array has string keys, convert to numeric array
        if (!empty($hotels) && !isset($hotels[0])) {
            // It's an associative array, convert to numeric
            return array_values($hotels);
        }
        
        return $hotels;
    }

    /**
     * Find a specific hotel by code
     */
    public function findHotel(array $searchData, string $hotelCode): ?array
    {
        $hotels = $this->extractHotels($searchData);
        
        foreach ($hotels as $hotel) {
            $code = $hotel["code"] ?? $hotel["HotelCode"] ?? $hotel["hotelCode"] ?? $hotel["hotel_code"] ?? $hotel["Code"] ?? null;
            if ($code === $hotelCode || (string)$code === (string)$hotelCode) {
                return $hotel;
            }
        }
        
        return null;
    }

    /**
     * Get hotel code from hotel array (handles various field names)
     */
    public function getHotelCode(array $hotel): ?string
    {
        return $hotel["code"] ?? $hotel["HotelCode"] ?? $hotel["hotelCode"] ?? $hotel["hotel_code"] ?? $hotel["Code"] ?? null;
    }

    /**
     * Extract rooms from hotel (handles roomDetails structure)
     */
    public function extractRooms(array $hotel): array
    {
        // MG API uses roomDetails structure
        if (isset($hotel["roomDetails"]) && is_array($hotel["roomDetails"])) {
            return $hotel["roomDetails"];
        }
        
        // Fallback to other possible structures
        return $hotel["Rooms"] ?? $hotel["rooms"] ?? [];
    }

    /**
     * Extract rate key from room detail
     */
    public function extractRateKey(array $roomDetail): ?string
    {
        // Rate key is nested: roomDetails[0]->rooms->room[0]->rateKey
        if (isset($roomDetail["rooms"]["room"][0]["rateKey"])) {
            return $roomDetail["rooms"]["room"][0]["rateKey"];
        }
        
        // Try other possible structures
        if (isset($roomDetail["rooms"][0]["rateKey"])) {
            return $roomDetail["rooms"][0]["rateKey"];
        }
        
        if (isset($roomDetail["rateKey"])) {
            return $roomDetail["rateKey"];
        }
        
        return $roomDetail["RateKey"] ?? $roomDetail["rate_key"] ?? null;
    }

    /**
     * Extract RoomDetails fields for Recheck API
     * Returns array with Code, MealPlan, CancellationPolicyType, PackageRate
     */
    public function extractRoomDetailsForRecheck(array $roomDetail): array
    {
        return [
            "Code"                  => $roomDetail["code"] ?? $roomDetail["Code"] ?? "",
            "MealPlan"              => $roomDetail["mealPlan"] ?? $roomDetail["MealPlan"] ?? "",
            "CancellationPolicyType" => $roomDetail["cancellationPolicyType"] ?? $roomDetail["CancellationPolicyType"] ?? "",
            "PackageRate"           => $roomDetail["packageRate"] ?? $roomDetail["PackageRate"] ?? false
        ];
    }
}

