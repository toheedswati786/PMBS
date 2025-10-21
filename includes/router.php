<?php
$route = $_GET['route'] ?? '';

switch ($route) {
    case '':
        include 'pages/home.php';
        break;

    case 'about':
        include 'pages/about.php';
        break;

    case 'services':
        include 'pages/services/services.php';
        break;
        
        case 'faq':
        include 'pages/faq.php';
        break;
        
        case 'contact':
            include 'pages/contact.php';
            break;
            
        case 'Virtual-Assistance':
            include 'pages/services/va-service.php';
            break;
    
        case 'Payer-Credentialing':
            include 'pages/services/pc-service.php';
            break;
    
        case 'Medical-Billing':
            include 'pages/services/mbc-service.php';
            break;
    
        case 'Revenue-Cycle-Management':
            include 'pages/services/rcm-service.php';
            break;
    
        case 'Eligibility-Verification':
            include 'pages/services/ev-service.php';
            break;
    
        case 'Web-Designing':
            include 'pages/services/wd-service.php';
            break;
    
        case 'Account-Receivable':
            include 'pages/services/ar-service.php';
            break;
    
        case 'Denial-Management':
            include 'pages/services/dm-service.php';
            break;
    
        case 'Prior-Authorization':
            include 'pages/services/pr-service.php';
            break;

    default:
        include 'pages/404.php';
        break;
}
?>
