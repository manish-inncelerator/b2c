<?php

namespace MG\Services;

use Exception;
use MG\Core\MGClient;

class RecheckService
{
    private $client;

    public function __construct()
    {
        $this->client = new MGClient();
    }

    public function recheck(array $params): array
    {
        $response = $this->client->recheckHotel($params);
        return $response;
    }

    public function validateRecheck(array $recheckResult): void
    {
        if (isset($recheckResult["status"]) && $recheckResult["status"] !== 1) {
            $errorMsg = $recheckResult["errorMessage"] ?? "Recheck failed";
            throw new Exception("Recheck validation failed: " . $errorMsg);
        }

        if (isset($recheckResult["errorCode"]) && !empty($recheckResult["errorCode"])) {
            $errorMsg = $recheckResult["errorMessage"] ?? "Recheck error";
            throw new Exception("Recheck error: " . $errorMsg);
        }
    }

    public function extractRecheckedRateKey(array $recheckResult): string
    {
        if (isset($recheckResult["RateKey"])) {
            return $recheckResult["RateKey"];
        }

        if (isset($recheckResult["rateKey"])) {
            return $recheckResult["rateKey"];
        }

        if (isset($recheckResult["RateDetails"]["RateKey"])) {
            return $recheckResult["RateDetails"]["RateKey"];
        }

        if (isset($recheckResult["rateDetails"]["rateKey"])) {
            return $recheckResult["rateDetails"]["rateKey"];
        }

        if (isset($recheckResult["Result"]["RateKey"])) {
            return $recheckResult["Result"]["RateKey"];
        }

        if (isset($recheckResult["result"]["rateKey"])) {
            return $recheckResult["result"]["rateKey"];
        }

        throw new Exception("Could not find rate key in recheck response");
    }
}