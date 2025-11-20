<?php
/**
 * MG SDK Autoloader
 * 
 * Simple autoloader for MG SDK classes
 */

// Load Composer autoloader first if available (for dependencies)
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

spl_autoload_register(function ($class) {
    // MG namespace only
    if (strpos($class, 'MG\\') !== 0) {
        return;
    }

    // Remove MG\ prefix
    $class = substr($class, 3);
    
    // Convert namespace separators to directory separators
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    }
});

// Load Config first (needed by other classes)
require_once __DIR__ . '/Config.php';

// Explicitly load RecheckService to ensure it's available
if (file_exists(__DIR__ . '/Services/RecheckService.php')) {
    require_once __DIR__ . '/Services/RecheckService.php';
}

