<?php

namespace MG\Core;

use Exception;
use MG\Config;
use MG\Core\HttpClient;

class MGClient
{
    private HttpClient $http;

    public function __construct()
    {
        $this->http = new HttpClient();
    }

    /**
     * Search for hotels
     * Endpoint: /Hotel/SearchHotel
     */
    public function searchHotel(array $params): array
    {
        return $this->http->execute("/Hotel/SearchHotel", $params, Config::TIMEOUT_SEARCH);
    }

    /**
     * Recheck hotel rate
     * Endpoint: /Hotel/RecheckHotel
     */
    public function recheckHotel(array $params): array
    {
        return $this->http->execute("/Hotel/RecheckHotel", $params, Config::TIMEOUT_RECHECK);
    }

    /**
     * Book hotel
     * Endpoint: /Hotel/BookHotel
     */
    public function bookHotel(array $params): array
    {
        return $this->http->execute("/Hotel/BookHotel", $params, Config::TIMEOUT_BOOK);
    }

    /**
     * Cancel reservation
     * Endpoint: /Hotel/CancelReservation
     */
    public function cancelReservation(array $params): array
    {
        return $this->http->execute("/Hotel/CancelReservation", $params, Config::TIMEOUT_CANCEL);
    }

    /**
     * Get reservation details
     * Endpoint: /hotel/GetRSVNDetails
     */
    public function getReservationDetails(array $params): array
    {
        return $this->http->execute("/hotel/GetRSVNDetails", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get reservation list
     * Endpoint: /hotel/GetRSVNList
     */
    public function getReservationList(array $params): array
    {
        return $this->http->execute("/hotel/GetRSVNList", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get hotel detail
     * Endpoint: /Hotel/GetHotelDetail
     */
    public function getHotelDetail(array $params): array
    {
        return $this->http->execute("/Hotel/GetHotelDetail", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get hotel list
     * Endpoint: /Hotel/GetHotelList
     */
    public function getHotelList(array $params): array
    {
        return $this->http->execute("/Hotel/GetHotelList", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get nationalities
     * Endpoint: /hotel/GetNationalities
     */
    public function getNationalities(array $params = []): array
    {
        return $this->http->execute("/hotel/GetNationalities", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get destinations
     * Endpoint: /hotel/GetDestinations
     */
    public function getDestinations(array $params = []): array
    {
        return $this->http->execute("/hotel/GetDestinations", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get promotion types
     * Endpoint: /hotel/GetPromotionTypes
     */
    public function getPromotionTypes(array $params = []): array
    {
        return $this->http->execute("/hotel/GetPromotionTypes", $params, Config::TIMEOUT_VIEW);
    }

    /**
     * Get meal plans
     * Endpoint: /hotel/GetMealPlans
     */
    public function getMealPlans(array $params = []): array
    {
        return $this->http->execute("/hotel/GetMealPlans", $params, Config::TIMEOUT_VIEW);
    }
}

