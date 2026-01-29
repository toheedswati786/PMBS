<?php

/**
 * SEO Helper Function
 * Generates dynamic meta tags for the page.
 */

function render_seo($title = null, $description = null, $image = null, $url = null)
{
    // Load configuration
    $config = include __DIR__ . '/seo_config.php';

    // Set defaults if values are not provided
    $site_name = $config['site_name'];
    $base_url = $config['base_url'];

    $final_title = $title ? $title . ' | ' . $site_name : $config['default_title'];
    $final_description = $description ? $description : $config['default_description'];
    $final_image = $image ? $base_url . $image : $base_url . $config['default_image'];

    // Construct Canonical URL
    if ($url) {
        $final_url = $base_url . $url;
    } else {
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $final_url = 'http://' . $_SERVER['HTTP_HOST'] . $request_uri;
    }

    // Output Tags
?>
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($final_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($final_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($config['default_keywords']); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($final_url); ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (Facebook/LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($final_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($final_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($final_image); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($final_url); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($final_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($final_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($final_image); ?>">
    <?php if (!empty($config['twitter_handle'])): ?>
        <meta name="twitter:site" content="<?php echo htmlspecialchars($config['twitter_handle']); ?>">
    <?php endif; ?>
    <!-- End SEO Meta Tags -->

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalOrganization",
            "name": "<?php echo htmlspecialchars($site_name); ?>",
            "url": "<?php echo htmlspecialchars($base_url); ?>",
            "logo": "<?php echo htmlspecialchars($final_image); ?>",
            "description": "<?php echo htmlspecialchars($final_description); ?>",
            "telephone": "+1-707-948-6213",
            "email": "info@puremedicalbilling.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "7901 4th ST N, STE 4878",
                "addressLocality": "ST.Petersburg",
                "addressRegion": "FL",
                "postalCode": "33702",
                "addressCountry": "US"
            },
            "openingHours": "Mo-Fr 09:00-18:00",
            "priceRange": "$$"
        }
    </script>
<?php
}
?>