<?php
// includes/config.php
// set this to your local dev root or live domain
// LOCAL example: http://localhost/dr
// LIVE example: https://puremedicalbilling.com
$base_url = 'http://localhost/pmbs';

// Useful absolute path to project root (filesystem)
define('ROOT_DIR', dirname(__DIR__)); // one level up from includes/
define('PAGES_DIR', ROOT_DIR . '/pages');
define('SERVICE_PAGES_DIR', ROOT_DIR . '/service-pages');
?>
