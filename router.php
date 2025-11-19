<?php
/**
 * Simple PHP Router
 * Routes URLs to PHP files
 */

class Router {
    private $routes = [];
    private $basePath = '';
    
    public function __construct($basePath = '') {
        $this->basePath = $basePath;
    }
    
    /**
     * Add a route
     */
    public function addRoute($path, $file) {
        $this->routes[$path] = $file;
    }
    
    /**
     * Get the current request path
     */
    private function getRequestPath() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = str_replace($this->basePath, '', $path);
        $path = trim($path, '/');
        return $path ?: 'index';
    }
    
    /**
     * Route the request
     */
    public function route() {
        $path = $this->getRequestPath();
        
        // Check if route exists
        if (isset($this->routes[$path])) {
            $file = $this->routes[$path];
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
        
        // Try direct file mapping (e.g., /hotel-search-results -> hotel-search-results.php)
        $file = $path . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
        
        // Default to index.php if path is empty or 'index'
        if (empty($path) || $path === 'index') {
            if (file_exists('index.php')) {
                require_once 'index.php';
                return;
            }
        }
        
        // 404 - Page not found
        http_response_code(404);
        echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f5f5f5;
        }
        .error-container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #333; margin-bottom: 10px; }
        p { color: #666; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class='error-container'>
        <h1>404</h1>
        <p>Page not found</p>
        <a href='/'>Go to Home</a>
    </div>
</body>
</html>";
    }
}

// Initialize router
$router = new Router();

// Define routes
$router->addRoute('', 'index.php');
$router->addRoute('index', 'index.php');
$router->addRoute('hotel-search-results', 'hotel-search-results.php');
$router->addRoute('hotel-details', 'hotel-details.php');
$router->addRoute('login', 'login.php');
$router->addRoute('signup', 'signup.php');
$router->addRoute('profile', 'profile.php');
$router->addRoute('edit-profile', 'edit-profile.php');
$router->addRoute('forgot-password', 'forgot-password.php');
$router->addRoute('cart', 'cart.php');
$router->addRoute('booking-success', 'booking-success.php');
$router->addRoute('booking-failed', 'booking-failed.php');
$router->addRoute('static-content', 'static-content.php');
$router->addRoute('index2222', 'index2222.php');

// Route the request
$router->route();
?>

