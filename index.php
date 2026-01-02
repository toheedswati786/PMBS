<?php
// Retrieve the requested URI path
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$script_name = dirname($_SERVER['SCRIPT_NAME']);

// Remove script path from URI to get the relative path
// e.g., if site is at /PMBS/, request /PMBS/about becomes /about
$path = str_replace($script_name, '', $request_uri);
$path = trim($path, '/');

// Default to home
if ($path == '' || $path == 'home') {
    $page = 'home';
} else {
    $page = $path;
}

// Security: Prevent Directory Traversal
if (strpos($page, '..') !== false) {
    http_response_code(400);
    echo "Bad Request";
    exit;
}

// Check if file exists in pages directory
$file_path = __DIR__ . '/pages/' . $page . '.php';

if (file_exists($file_path)) {
    include $file_path;
} else {
    // 404 Page
    http_response_code(404);
    include __DIR__ . '/pages/404.php';
}
