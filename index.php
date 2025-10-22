
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the requested path
$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Your base folder name
$base_folder = 'pmbs';

if (strpos($request_uri, $base_folder) === 0) {
    $request_uri = substr($request_uri, strlen($base_folder));
}

$route = trim($request_uri, '/');

// Default route (home)
if ($route === '' || $route === 'index.php') {
    $route = 'home';
}

// Include router
include 'includes/router.php';
?>
