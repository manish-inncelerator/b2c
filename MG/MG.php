<?php

namespace MG;

/**
 * MG.php – SDK Facade Loader
 * ---------------------------------------
 * This file provides a SIMPLE public interface to the entire MG SDK.
 *
 * Example:
 *    MG::workflow()->execute($params);
 *    MG::search()->search($params);
 *    MG::client()->searchHotel($params);
 */

class MG
{
    /**
     * Initialize SDK folders, configs, etc.
     */
    public static function init(): void
    {
        // Config is auto-initialized when loaded
        // Logger can be initialized here if it exists
        /** @var class-string|null $loggerClass */
        $loggerClass = '\MG\Logger';
        if (class_exists($loggerClass) && method_exists($loggerClass, 'instance')) {
            $loggerClass::instance();
        }
    }

    // -----------------------------------------
    // CORE CLIENT (RAW MG API ACCESS)
    // -----------------------------------------
    public static function client()
    {
        /** @var class-string|null $clientClass */
        $clientClass = '\MG\Core\MGClient';
        if (class_exists($clientClass)) {
            return new $clientClass();
        }
        throw new \RuntimeException('MGClient class not found');
    }

    // -----------------------------------------
    // SEARCH SERVICE
    // -----------------------------------------
    public static function search()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\SearchService';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('SearchService class not found');
    }

    // -----------------------------------------
    // RECHECK SERVICE
    // -----------------------------------------
    public static function recheck()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\RecheckService';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('RecheckService class not found');
    }

    // -----------------------------------------
    // BOOK SERVICE
    // -----------------------------------------
    public static function book()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\BookService';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('BookService class not found');
    }

    // -----------------------------------------
    // RESERVATION SERVICE
    // -----------------------------------------
    public static function reservation()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\ReservationService';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('ReservationService class not found');
    }

    // -----------------------------------------
    // HOTEL CONTENT SERVICE
    // -----------------------------------------
    public static function content()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\HotelContentService';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('HotelContentService class not found');
    }

    // -----------------------------------------
    // MASTER BOOKING WORKFLOW (Search → Recheck → Book)
    // -----------------------------------------
    public static function workflow()
    {
        /** @var class-string|null $serviceClass */
        $serviceClass = '\MG\Services\BookingWorkflow';
        if (class_exists($serviceClass)) {
            return new $serviceClass();
        }
        throw new \RuntimeException('BookingWorkflow class not found');
    }

    // -----------------------------------------
    // SECURITY: TOKEN ROTATION
    // -----------------------------------------
    public static function tokens()
    {
        /** @var class-string|null $securityClass */
        $securityClass = '\MG\Security\TokenRotator';
        if (class_exists($securityClass)) {
            return new $securityClass();
        }
        throw new \RuntimeException('TokenRotator class not found');
    }

    // -----------------------------------------
    // SECURITY: INTERNAL BEARER AUTH VALIDATOR
    // -----------------------------------------
    public static function auth()
    {
        /** @var class-string|null $securityClass */
        $securityClass = '\MG\Security\BearerAuth';
        if (class_exists($securityClass)) {
            return new $securityClass();
        }
        throw new \RuntimeException('BearerAuth class not found');
    }

    // -----------------------------------------
    // SECURITY: SIGNATURE VALIDATION (HMAC)
    // -----------------------------------------
    public static function signature()
    {
        /** @var class-string|null $securityClass */
        $securityClass = '\MG\Security\SignatureValidator';
        if (class_exists($securityClass)) {
            return new $securityClass();
        }
        throw new \RuntimeException('SignatureValidator class not found');
    }

    // -----------------------------------------
    // CRYPTO ENGINE (AES-256-GCM)
    // -----------------------------------------
    public static function crypto()
    {
        /** @var class-string|null $securityClass */
        $securityClass = '\MG\Security\Crypto';
        if (class_exists($securityClass)) {
            return new $securityClass();
        }
        throw new \RuntimeException('Crypto class not found');
    }
}
