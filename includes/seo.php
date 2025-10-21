<?php
// Default values
$page_title = $page_title ?? "Pure Medical Billing Solutions | Professional Billing Services";
$page_description = $page_description ?? "Pure Medical Billing Solutions provides efficient, accurate, and transparent medical billing and denial management services.";
$page_keywords = $page_keywords ?? "medical billing, healthcare billing, denial management, PMBS";
$page_image = $page_image ?? "https://puremedicalbilling.com/assets/images/logo.png";
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($page_title) ?></title>
<link rel="canonical" href="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

<meta name="description" content="<?= htmlspecialchars($page_description) ?>">
<meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
<meta name="author" content="Pure Medical Billing Solutions">

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
<meta property="og:image" content="<?= htmlspecialchars($page_image) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($page_image) ?>">
