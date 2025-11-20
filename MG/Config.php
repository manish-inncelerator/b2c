<?php

namespace MG;

class Config
{
    /**
     * ---------------------------------------------------------
     *  MASTER KEY (AES-256 Encryption for secrets.json)
     * ---------------------------------------------------------
     */
    public const MASTER_KEY = "38ed05e1ba6954f1dbcfe34bc9d3d9a416af7ff8b2e412e4cf607832521ad64e";

    /**
     * ---------------------------------------------------------
     *  MG API CREDENTIALS (UAT/PRODUCTION)
     * ---------------------------------------------------------
     */
    public const MG_AGENCY_CODE = "AGSG026060";
    public const MG_USERNAME    = "FayyazJ1";
    public const MG_PASSWORD    = "EdSf!6dgyf53!gTDSF356g";

    /**
     * ---------------------------------------------------------
     *  MG API BASE URLS
     * ---------------------------------------------------------
     * Production: HTTPS
     * UAT: HTTP (no HTTPS in UAT)
     */
    public const MG_BASE_URL_PRODUCTION = "https://jarvis1-xmlsell.mgbedbank.com/1.0";
    public const MG_BASE_URL_UAT = "http://uat-jarvis1-xmlsell.mgbedbank.com/1.0";

    /**
     * Environment: 'production' or 'uat'
     * Change this to switch between environments
     */
    public const MG_ENVIRONMENT = "uat"; // Change to "production" for production

    /**
     * Get the base URL based on environment
     */
    public static function getBaseUrl(): string
    {
        return self::MG_ENVIRONMENT === "production" 
            ? self::MG_BASE_URL_PRODUCTION 
            : self::MG_BASE_URL_UAT;
    }

    /**
     * @deprecated Use getBaseUrl() instead
     */
    public const MG_BASE_URL = "http://uat-jarvis1-xmlsell.mgbedbank.com/1.0";

    /**
     * @deprecated Use getBaseUrl() instead
     */
    public const MG_UAT_URL = "http://uat-jarvis1-xmlsell.mgbedbank.com/1.0";

    /**
     * ---------------------------------------------------------
     *  STORAGE (Persistent Secrets, Logs)
     * ---------------------------------------------------------
     */
    public const STORAGE_PATH = __DIR__ . "/../storage";
    public const SECRETS_FILE = __DIR__ . "/../storage/secrets.json";
    public const SECRET_FILE = __DIR__ . "/../storage/secrets.json";

    /**
     * Log directory
     */
    public const LOG_PATH = __DIR__ . "/../logs";

    /**
     * ---------------------------------------------------------
     *  MG TIMEOUTS (recommended values)
     * ---------------------------------------------------------
     */
    public const TIMEOUT_SEARCH   = 60;  // Increased for hotel search (can take longer)
    public const TIMEOUT_RECHECK  = 30;  // Increased for rate recheck
    public const TIMEOUT_BOOK     = 120;
    public const TIMEOUT_VIEW     = 60;
    public const TIMEOUT_CANCEL   = 70;

    /**
     * ---------------------------------------------------------
     *  SECURITY SETTINGS
     * ---------------------------------------------------------
     */
    public const SIGNATURE_TTL = 60; // seconds
    public const NONCE_TTL     = 120; // seconds
    public const NONCE_PREFIX  = "mg_nonce_";

    /**
     * ---------------------------------------------------------
     *  CACHE SETTINGS (File-based cache TTLs)
     * ---------------------------------------------------------
     */
    public const RATEKEY_TTL  = 1200; // 20 min
    public const SEARCH_TTL   = 900;  // 15 min
    public const HOTEL_TTL    = 3600; // 1 hour
    public const DEST_TTL     = 86400; // 24 hours
    public const CONTENT_TTL  = 3600; // 1 hour (for hotel content, nationalities, etc.)
    public const RESERVATION_TTL = 300; // 5 min (for reservation details cache)

    /**
     * ---------------------------------------------------------
     *  HTTP HEADERS (MG Requirements)
     * ---------------------------------------------------------
     */
    public const HEADERS = [
        "Accept: application/json",
        "Content-Type: application/json"
    ];

    /**
     * ---------------------------------------------------------
     *  SYSTEM SETTINGS
     * ---------------------------------------------------------
     */
    public static function init(): void
    {
        date_default_timezone_set("Asia/Singapore");

        // Ensure storage paths exist
        if (!is_dir(self::STORAGE_PATH)) {
            mkdir(self::STORAGE_PATH, 0775, true);
        }

        if (!is_dir(self::LOG_PATH)) {
            mkdir(self::LOG_PATH, 0775, true);
        }
    }
}

// Initialize immediately when loaded
Config::init();

