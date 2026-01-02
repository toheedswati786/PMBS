<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Home || Pure Medical Billing Solutions
    </title>
    <meta name="description" content="Pure Medical Billing Solutions offers expert medical billing, coding, and credentialing services to help healthcare providers reduce denials and maximize revenue." />
    <?php include 'assets/includes/links.php'; ?>
</head>

<body class="custom-cursor">
    <?php include 'assets/includes/header.php'; ?>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Error Page</h2>
                    <ul class="insuba-breadcrumb list-unstyled">
                        <li><a href="./">Home</a></li>
                        <li><span>Error Page</span></li>
                    </ul><!-- /.insuba-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/images/resources/page-header-1-1.png" alt="image" class="page-header__image">
            <img src="assets/images/shapes/page-header-shape-1-1.png" alt="shape" class="page-header__shape-one">
            <div class="page-header__shape-two"></div><!-- /.page-header__shape-two -->
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-three -->
        </section><!-- /.page-header -->

        <section class="error-404 section-space-top section-space-bottom2">
            <div class="container">
                <div class="error-404__content">
                    <img src="assets/images/shapes/error-404.png" alt="error 404" class="error-404__image">
                    <h3 class="error-404__title wow fadeInUp" data-wow-duration="1500ms">Page not found!</h3><!-- /.error-404__title -->
                    <p class="error-404__text wow fadeInUp" data-wow-duration="1500ms">Sorry we can't find that page! The page you are looking <br>
                        for was never existed.</p><!-- /.error-404__text -->
                    <div class="error-404__btns wow fadeInUp" data-wow-duration="1500ms">
                        <a href="./" class="error-404__btn insuba-btn insuba-btn--base"><span>Go To Home</span></a>
                    </div><!-- /.error-404__btns -->
                </div><!-- /.error-404__content -->
            </div><!-- /.container -->
        </section><!-- /.error-404 section-space-top -->

        <div class="newsletter @@extraClassName">
            <div class="container">
                <div class="newsletter__inner wow fadeInUp" data-wow-duration="1500ms">
                    <div class="newsletter__inner__bg">
                        <img src="assets/images/shapes/newsletter-shape-1-1.png" alt="shape" class="newsletter__shape-one">
                        <img src="assets/images/shapes/newsletter-shape-1-2.png" alt="shape" class="newsletter__shape-two">
                    </div><!-- /.newsletter__inner__bg -->
                    <div class="newsletter__image">
                        <img src="assets/images/resources/newsletter-1-1.png" alt="newsletter" class="newsletter__image__one">
                        <img src="assets/images/shapes/newsletter-shape-1-3.png" alt="shape" class="newsletter__image__shape">
                    </div><!-- /.newsletter__image -->
                    <div class="newsletter__form">
                        <h3 class="newsletter__form__title">Get an overview of all our services</h3><!-- /.newsletter__form__title -->
                        <form action="contact" method="post"  class="newsletter__form__form mc-form">
                            <input type="text" name="EMAIL" id="contact-email" placeholder="Your email address">
                            <button type="submit" onclick="submitForm()" class="insuba-btn"><span>Submit</span></button>
                        </form><!-- /.newsletter__form__form mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.newsletter__form -->
                </div><!-- /.newsletter__inner -->
            </div><!-- /.container -->
        </div><!-- /.newsletter -->

<script>
    function submitForm(){
        var emailContainer = document.getElementById('contact-email');
        var value = emailContainer.value;
        window.location.href = 'contact.php?email=' + encodeURIComponent(value);
    }
</script>

    <?php include 'assets/includes/footer.php'; ?>
    <?php include 'assets/includes/scripts.php'; ?>
    </body>

    </html>
