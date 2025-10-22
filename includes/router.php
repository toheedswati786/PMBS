<?php
// $route = $_GET['route'] ?? trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// if ($route === '' || $route === 'index.php' || $route === basename(__FILE__)) {
//     $route = 'home';
// }

// // Remove the folder prefix if it exists (like 'updated-website/')
// $route = str_replace('updated-website/', '', $route);


// switch ($route) {
//     case '':
//         include 'pages/home.php';
//         break;

//     case 'about':
//         include 'pages/about.php';
//         break;

//     case 'services':
//         include 'pages/services/services.php';
//         break;
        
//         case 'faq':
//         include 'pages/faq.php';
//         break;
        
//         case 'contact':
//             include 'pages/contact.php';
//             break;
            
//         case 'Virtual-Assistance':
//             include 'pages/services/va-service.php';
//             break;
    
//         case 'Payer-Credentialing':
//             include 'pages/services/pc-service.php';
//             break;
    
//         case 'Medical-Billing':
//             include 'pages/services/mbc-service.php';
//             break;
    
//         case 'Revenue-Cycle-Management':
//             include 'pages/services/rcm-service.php';
//             break;
    
//         case 'Eligibility-Verification':
//             include 'pages/services/ev-service.php';
//             break;
    
//         case 'Web-Designing':
//             include 'pages/services/wd-service.php';
//             break;
    
//         case 'Account-Receivable':
//             include 'pages/services/ar-service.php';
//             break;
    
//         case 'Denial-Management':
//             include 'pages/services/dm-service.php';
//             break;
    
//         case 'Prior-Authorization':
//             include 'pages/services/pr-service.php';
//             break;

//     default:
//         include 'pages/404.php';
//         break;
// }
?>


<?php
$route = $_GET['route'] ?? '';

$basePath = __DIR__ . '/../pages/';

switch ($route) {
    case '':
    case 'home':
        include $basePath . 'home.php';
        break;

    case 'about':
        include $basePath . 'about.php';
        break;

    case 'services':
        // Main Services page
        include $basePath . 'services/index.php';
        break;

    default:
        // Detect sub-services like services/denial-management
        if (preg_match('#^services/(.+)$#', $route, $matches)) {
            $servicePage = $basePath . 'services/' . basename($matches[1]) . '.php';
            if (file_exists($servicePage)) {
                include $servicePage;
            } else {
                include $basePath . 'error.php';
            }
        } else {
            switch ($route) {
                case 'faq':
                    include $basePath . 'faq.php';
                    break;
                case 'contact':
                    include $basePath . 'contact.php';
                    break;
                default:
                    include $basePath . 'error.php';
                    break;
            }
        }
        break;
}
?>

