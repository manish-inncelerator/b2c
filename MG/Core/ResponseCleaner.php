<?php

namespace MG\Core;

class ResponseCleaner {

    private static array $blocked = [
        "availFlag", "AvailFlag",
        "canHold", "CanHold"
    ];

    public static function clean(&$data) {
        if (!is_array($data)) return;

        // Remove forbidden keys
        foreach (self::$blocked as $key) {
            if (array_key_exists($key, $data)) {
                unset($data[$key]);
            }
        }

        // Recurse into children
        foreach ($data as &$value) {
            if (is_array($value)) {
                self::clean($value);
            }
        }
    }
}
