<?php
if (isset($_GET['email']) && !empty(isset($_GET['email']))) {
    $email = $_GET['email'];
} else {
    $email = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Pure Medical Billing Solutions</title>
    <?php include 'assets/includes/links.php'; ?>
</head>

<body class="custom-cursor">
    <?php include 'assets/includes/header.php'; ?>

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div>
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title">Contact Us</h2>
            </div>
        </div>
        <img src="assets/images/resources/page-header-1-1.png" alt="image" class="page-header__image">
        <img src="assets/images/shapes/page-header-shape-1-1.png" alt="shape" class="page-header__shape-one">
        <div class="page-header__shape-two"></div>
        <div class="page-header__shape-three"></div>
        <div class="page-header__shape-four"></div>
    </section>

    <section class="contact section-space">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__call">
                    <span class="contact__call__icon"><i class="icon-phone-ringing"></i></span>
                    <div class="contact__call__content">
                        <h4 class="contact__call__title">Phone Number</h4>
                        <a href="tel:+1707948213" class="contact__call__number">+1(707)948-213</a>
                    </div>
                </div>
                <div class="contact__inner">
                    <div class="contact__row row gutter-y-50 align-items-center">
                        <div class="contact__form-col">
                            <div class="contact__content">
                                <div class="contact__tab-box tabs-box">
                                    <div class="tabs-content">
                                        <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" style="display: block;">
                                            <div class="contact__tab-content">
                                                <h3 class="contact__title">Get in touch with us</h3>
                                                <form class="contact__form" action="mailer" method="get" novalidate="novalidate">
                                                    <div class="contact__form__group">
                                                        <div class="contact__form__control contact__form__control--full">
                                                            <input type="text" name="name" placeholder="Your Name *">
                                                        </div>
                                                        <div class="contact__form__control contact__form__control--full">
                                                            <input type="email" name="email" placeholder="Your Email *" value="<?php echo $email ?>">
                                                        </div>
                                                        <div class="contact__form__control contact__form__control--full">
                                                            <input type="text" name="message" placeholder="Your Message *">
                                                        </div>
                                                        <div class="contact__form__control contact__form__control--full">
                                                            <button type="submit" class="insuba-btn insuba-btn--base">
                                                                <span>Submit</span>
                                                                <span class="insuba-btn__icon-box"><span class="insuba-btn__icon"><i class="fas fa-arrow-right"></i></span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__image-col">
                            <div class="contact__image">
                                <img src="assets/images/contact/contact-3-1.jpg" alt="contact">
                            </div>
                        </div>
                    </div>
                    <div class="contact__inner__shape-box">
                        <div class="contact__inner__shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <img src="https://media.istockphoto.com/id/2052093189/vector/blue-mail-icon-mail-button-vector.jpg?s=612x612&w=0&k=20&c=nUYbs8zEExhLHw2yYD7sX59KdFPoXMsTUyX5qbgeIVU=" width="200" alt="umbrella" class="contact__umbrella-image">
        <img src="assets/images/shapes/contact-call.png" alt="call" class="contact__call-image">
    </section>

    <section class="contact-map section-space-bottom2">
        <div class="container-fluid">
            <div class="google-map google-map__contact">
                <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7055.749590927844!2d-82.638182!3d27.844386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e6a2b7850c2f%3A0x8dd58ca8e357d5cc!2s7901%204th%20St%20N%20%234878%2C%20St.%20Petersburg%2C%20FL%2033702%2C%20USA!5e0!3m2!1sen!2s!4v1758550969096!5m2!1sen!2s" class="map__contact" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>

    <div class="newsletter">
        <div class="container">
            <div class="newsletter__inner wow fadeInUp" data-wow-duration="1500ms">
                <div class="newsletter__inner__bg">
                    <img src="assets/images/shapes/newsletter-shape-1-1.png" alt="shape" class="newsletter__shape-one">
                    <img src="assets/images/shapes/newsletter-shape-1-2.png" alt="shape" class="newsletter__shape-two">
                </div>
                <div class="newsletter__image">
                    <img src="assets/images/resources/newsletter-1-1.png" alt="newsletter" class="newsletter__image__one">
                    <img src="assets/images/shapes/newsletter-shape-1-3.png" alt="shape" class="newsletter__image__shape">
                </div>
                <div class="newsletter__form">
                    <h3 class="newsletter__form__title">Get an overview of all our services</h3>
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="newsletter__form__form mc-form">
                        <input type="text" id="contact-email" name="EMAIL" placeholder="Your email address">
                        <button type="submit" onclick="submitForm()" class="insuba-btn"><span>Submit</span></button>
                    </form>
                    <div class="mc-form__response"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'assets/includes/footer.php'; ?>
    <?php include 'assets/includes/scripts.php'; ?>
</body>

</html>
