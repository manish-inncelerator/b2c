<?php

namespace MG\Core;

use Exception;
use MG\Config;

class HttpClient
{
    private string $baseUrl;

    public function __construct(?string $baseUrl = null)
    {
        $this->baseUrl = $baseUrl ?? Config::getBaseUrl();
    }

    /**
     * Execute POST request to MG API
     */
    public function execute(string $endpoint, array $payload, int $timeout): array
    {
        // Remove AvailFlag from RecheckHotel and BookHotel requests (not allowed)
        if (strpos($endpoint, "RecheckHotel") !== false || strpos($endpoint, "BookHotel") !== false) {
            unset($payload["AvailFlag"]);
            unset($payload["availFlag"]);
        }
        
        // Inject login credentials
        $payload["Login"] = [
            "AgencyCode" => Config::MG_AGENCY_CODE,
            "Username"   => Config::MG_USERNAME,
            "Password"   => Config::MG_PASSWORD
        ];
        
        // Debug: Log payload (remove in production)
        error_log("MG API Request to {$endpoint}: " . json_encode($payload, JSON_PRETTY_PRINT));

        $jsonPayload = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $url = rtrim($this->baseUrl, "/") . $endpoint;

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST            => true,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_POSTFIELDS      => $jsonPayload,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYPEER  => false,
            CURLOPT_TIMEOUT         => $timeout,
            CURLOPT_CONNECTTIMEOUT  => 10, // Connection timeout (separate from total timeout)
            CURLOPT_ENCODING        => '', // Enable automatic decompression (gzip, deflate)
            CURLOPT_HTTPHEADER      => Config::HEADERS
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        $curlErr  = curl_error($ch);
        curl_close($ch);

        if ($curlErr) {
            $errorMsg = "Network error: " . $curlErr;
            if (strpos($curlErr, "timeout") !== false || strpos($curlErr, "timed out") !== false) {
                $errorMsg .= " (Timeout after {$timeout} seconds)";
            }
            throw new Exception($errorMsg);
        }

        if ($httpCode !== 200) {
            // Try to extract error message from response
            $errorMsg = "HTTP Error " . $httpCode;
            if ($response) {
                $errorData = json_decode($response, true);
                if ($errorData && isset($errorData["errorMessage"])) {
                    $errorMsg .= ": " . $errorData["errorMessage"];
                } elseif ($errorData && isset($errorData["errorCode"])) {
                    $errorMsg .= " (Error Code: " . $errorData["errorCode"] . ")";
                } else {
                    // Show raw response for debugging
                    $preview = substr($response, 0, 500);
                    $errorMsg .= " | Response: " . $preview;
                }
            }
            error_log("MG HttpClient HTTP Error {$httpCode} for {$endpoint}: " . ($response ? substr($response, 0, 500) : 'No response'));
            throw new Exception($errorMsg);
        }

        if (!$response) {
            throw new Exception("Empty API response");
        }

        // Check if response is gzip-compressed (starts with 0x1f 0x8b)
        if (strlen($response) >= 2 && ord($response[0]) === 0x1f && ord($response[1]) === 0x8b) {
            $decompressed = @gzdecode($response);
            if ($decompressed !== false) {
                $response = $decompressed;
            } else {
                // Try gzinflate if gzdecode fails
                $decompressed = @gzinflate(substr($response, 10));
                if ($decompressed !== false) {
                    $response = $decompressed;
                } else {
                    throw new Exception("Failed to decompress gzip response");
                }
            }
        }

        // Remove UTF-8 BOM if present
        if (substr($response, 0, 3) === "\xEF\xBB\xBF") {
            $response = substr($response, 3);
        }

        // Check if response is XML instead of JSON
        $trimmed = trim($response);
        if (substr($trimmed, 0, 5) === '<?xml' || substr($trimmed, 0, 1) === '<') {
            throw new Exception("API returned XML instead of JSON. Response preview: " . substr($trimmed, 0, 200));
        }

        // Clean response: remove null bytes and other problematic control characters
        // But preserve newlines and tabs which are valid in JSON strings
        $response = str_replace(["\x00", "\x01", "\x02", "\x03", "\x04", "\x05", "\x06", "\x07", "\x08", "\x0B", "\x0C", "\x0E", "\x0F"], '', $response);
        $response = trim($response);

        // Try to decode JSON with error handling
        // Use JSON_INVALID_UTF8_IGNORE to handle invalid UTF-8 sequences
        $decoded = json_decode($response, true, 512, JSON_INVALID_UTF8_IGNORE);

        // Auto-clean MG forbidden fields (AvailFlag, canHold, etc.)
        if (is_array($decoded)) {
            \MG\Core\ResponseCleaner::clean($decoded);
        }


        if (json_last_error() !== JSON_ERROR_NONE) {
            // Log the raw response for debugging
            $preview = substr($response, 0, 500);
            $errorMsg = "Invalid JSON: " . json_last_error_msg();
            $errorMsg .= " | Response preview: " . $preview;
            $errorMsg .= " | Response length: " . strlen($response);
            $errorMsg .= " | First 50 chars: " . substr($response, 0, 50);
            error_log("MG HttpClient JSON Error: " . $errorMsg);
            throw new Exception($errorMsg);
        }

        // Check for API errors in response
        if (isset($decoded["errorCode"]) && !empty($decoded["errorCode"])) {
            $errorMsg = $decoded["errorMessage"] ?? "API Error";
            $errorCode = $decoded["errorCode"];
            throw new Exception("API Error ({$errorCode}): " . $errorMsg);
        }

        return $decoded;
    }
}

