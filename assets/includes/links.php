    <?php
    $script_path = dirname($_SERVER['SCRIPT_NAME']);
    if ($script_path === '/' || $script_path === '\\') {
        $base = '/';
    } else {
        $base = rtrim($script_path, '/\\') . '/';
    }
    // Convert backslashes to forward slashes for Windows URL compatibility
    $base = str_replace('\\', '/', $base);
    ?>
    <base href="<?php echo $base; ?>">
    <link
        rel="icon"
        type="image/png"
        href="assets/images/favicon.png" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap"
        rel="stylesheet" />

    <link
        rel="stylesheet"
        href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />

    <link
        rel="stylesheet"
        href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/nouislider/nouislider.min.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/nouislider/nouislider.pips.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/insuba-icons/style.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/insuba.css" />