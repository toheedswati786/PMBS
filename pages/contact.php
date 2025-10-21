<?php
if(isset($_GET['email']) && !empty(isset($_GET['email']))){
    $email = $_GET['email'];
} else{
    $email = "";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "includes/links.php";
    ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader" style="background-color: white !important;">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="header">
            <div class="topbar topbar--one">
                <div class="topbar__bg"></div><!-- /.topbar__bg -->
                <div class="container-fluid">
                    <div class="topbar__inner">
                        <ul class="list-unstyled topbar__info">
                            <li>
                                <div class="topbar__info__icon-box topbar__info__icon--email">
                                    <span class="topbar__info__icon">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <a href="mailto:info@puremedicalbilling.com">info@puremedicalbilling.com</a>
                            </li>
                            <li>
                                <div class="topbar__info__icon-box">
                                    <span class="topbar__info__icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <a href="https://www.google.com/maps/place/7901+4th+St+N+%234878,+St.+Petersburg,+FL+33702/@27.844386,-82.638182,16z/data=!4m6!3m5!1s0x88c2e6a2b7850c2f:0x8dd58ca8e357d5cc!8m2!3d27.8443863!4d-82.638182!16s%2Fg%2F11s5j6nss0?hl=en&entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D" target="_blank">7901 4th ST N, STE 4878, ST.Petersburg Florida, 33702.</a>
                            </li>
                        </ul><!-- /.list-unstyled topbar__info -->
                        <div class="topbar__right">
                            <div class="topbar__social social-links">
                                <a href="https://www.facebook.com/profile.html?id=61555900199388" target="_blank">
                                    <span class="social-links__icon">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </span><!-- /.social-links__icon -->
                                </a>
                                <a href="https://www.instagram.com/pure.medical.billing.solutions" target="_blank">
                                    <span class="social-links__icon">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </span><!-- /.social-links__icon -->
                                </a>
                            </div>
                        </div><!-- /.topbar__right -->
                    </div><!-- /.topbar__inner -->
                </div><!-- /.container-fluid -->
            </div><!-- /.topbar -->

            <?php
            include 'includes/header.php';
            ?>
        </div><!-- /.header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);"></div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Contact Us</h2>
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
            <img src="assets/images/resources/page-header-1-1.png" alt="image" class="page-header__image">
            <img src="assets/images/shapes/page-header-shape-1-1.png" alt="shape" class="page-header__shape-one">
            <div class="page-header__shape-two"></div><!-- /.page-header__shape-two -->
            <div class="page-header__shape-three"></div><!-- /.page-header__shape-three -->
            <div class="page-header__shape-four"></div><!-- /.page-header__shape-three -->
        </section><!-- /.page-header -->

        <section class="contact section-space">
            <div class="container">
                <div class="contact__wrapper">
                    <div class="contact__call">
                        <span class="contact__call__icon">
                            <i class="icon-phone-ringing"></i>
                        </span><!-- /.contact__call__icon -->
                        <div class="contact__call__content">
                            <h4 class="contact__call__title">Phone Number</h4><!-- /.contact__call__title -->
                            <a href="tel:+1707948213" class="contact__call__number">+1(707)948-213</a><!-- /.contact__call__number -->
                        </div><!-- /.contact__call__content -->
                    </div><!-- /.contact__call -->
                    <div class="contact__inner">
                        <div class="contact__row row gutter-y-50 align-items-center">
                            <div class="contact__form-col">
                                <div class="contact__content">
                                    <div class="contact__tab-box tabs-box">
                                        <div class="tabs-content">
                                            <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="contact001" style="display: block;">
                                                <div class="contact__tab-content">
                                                    <h3 class="contact__title">Get in touch with us</h3><!-- /.contact__title -->
                                                    <form class="contact__form contact-form-validated" action="inc/sendemail.html">
                                                        <div class="contact__form__group">
                                                            <div class="contact__form__control contact__form__control--full">
                                                                <input type="text" name="name" placeholder="Your Name *">
                                                            </div><!-- /.contact__form__control contact__form__control--full -->
                                                            <div class="contact__form__control contact__form__control--full">
                                                                <input type="email" name="email" placeholder="Your Email *" value="<?php echo $email?>">
                                                            </div>
                                                            <div class="contact__form__control contact__form__control--full">
                                                                <input type="text" name="message" placeholder="Your Message *">
                                                            </div>
                                                            <div class="contact__form__control contact__form__control--full">
                                                                <button type="submit" class="insuba-btn insuba-btn--base">
                                                                    <span>Submit</span>
                                                                    <span class="insuba-btn__icon-box">
                                                                        <span class="insuba-btn__icon"><i class="fas fa-arrow-right"></i></span>
                                                                    </span>
                                                                </button><!-- /.insuba-btn -->
                                                            </div><!-- /.contact__form__control -->
                                                        </div><!-- /.contact__form__group -->
                                                    </form><!-- /.contact__form -->
                                                </div><!-- /.contact__tab-content -->
                                            </div>
                                        </div><!-- /.tab-content -->
                                    </div><!-- /.contact__tab-box -->
                                </div><!-- /.contact__content -->
                            </div><!-- /.contact__form-col -->
                            <div class="contact__image-col">
                                <div class="contact__image">
                                    <img src="assets/images/contact/contact-3-1.jpg" alt="contact">
                                </div><!-- /.contact__image -->
                            </div><!-- /.contact__image-col -->
                        </div><!-- /.row gutter-y-50 -->
                        <div class="contact__inner__shape-box">
                            <div class="contact__inner__shape"></div><!-- /.contact__image__shape -->
                        </div><!-- /.contact__inner__shape-box -->
                    </div><!-- /.contact__inner -->
                </div><!-- /.contact__wrapper -->
            </div><!-- /.container -->
            <img src="https://media.istockphoto.com/id/2052093189/vector/blue-mail-icon-mail-button-vector.jpg?s=612x612&w=0&k=20&c=nUYbs8zEExhLHw2yYD7sX59KdFPoXMsTUyX5qbgeIVU=" width="200" alt="umbrella" class="contact__umbrella-image">
            <img src="assets/images/shapes/contact-call.png" alt="umbrella" class="contact__call-image">
        </section><!-- /.contact section-space -->

        <section class="contact-map section-space-bottom2">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7055.749590927844!2d-82.638182!3d27.844386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e6a2b7850c2f%3A0x8dd58ca8e357d5cc!2s7901%204th%20St%20N%20%234878%2C%20St.%20Petersburg%2C%20FL%2033702%2C%20USA!5e0!3m2!1sen!2s!4v1758550969096!5m2!1sen!2s" class="map__contact" allowfullscreen=""></iframe>
                </div>
                <!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->

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
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="newsletter__form__form mc-form">
                            <input type="text" id="contact-email" name="EMAIL" placeholder="Your email address">
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
        <footer class="main-footer @@extraClassName">
            <div class="main-footer__top">
                <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg.jpg);"></div><!-- /.main-footer__bg -->
                          <div class="container">
            <div class="row gutter-y-40">
              <div
                class="col-xl-8 col-lg-6 col-md-8 wow fadeInUp"
                data-wow-duration="1500ms"
                data-wow-delay="00ms"
              >
                <div class="footer-widget footer-widget--about">
                  <a href="index.html" class="footer-widget__logo">
                    <img
                      src="assets/images/logo-dark.png"
                      width="292"
                      alt="Insuba HTML Template" style="background-color: white; padding:10px;border-radius: 29px;" 
                    /> </a
                  ><!-- /.footer-widget__logo -->
                  <p class="footer-widget__about">
                    We provide billing and RCM services tailored for therapists and psychiatrists while ensuring you stay connected with our company’s newest updates.
                  </p>
                  <!-- /.footer-widget__about -->
                  <div class="social-links">
                    <a href="https://www.facebook.com/profile.html?id=61555900199388" target="_blank">
                      <span class="social-links__icon">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span> </span
                      ><!-- /.social-links__icon -->
                    </a>
                    <a href="https://www.instagram.com/pure.medical.billing.solutions" target="_blank">
                      <span class="social-links__icon">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span> </span
                      ><!-- /.social-links__icon -->
                    </a>
                  </div>
                  <!-- /.social-links -->
                </div>
                <!-- /.footer-widget -->
              </div>

              <div
                class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-duration="1500ms"
                data-wow-delay="300ms"
              >
                <div class="footer-widget footer-widget--info">
                  <h2 class="footer-widget__title">About Us</h2>
                  <!-- /.footer-widget__title -->
                  <ul class="list-unstyled footer-widget__info">
                    <li>
                      <span class="footer-widget__info__icon"
                        ><i class="far fa-clock"></i
                      ></span>
                      <div class="footer-widget__info__text">
                        <span>Office Hours:</span> <br />
                        <span>Mon - Fri: 09.00 AM. - 06.00 PM (EST).</span>
                      </div>
                      <!-- /.footer-widget__info__text -->
                    </li>
                    <li>
                      <span class="footer-widget__info__icon"
                        ><i class="fas fa-map-marker-alt"></i
                      ></span>
                      <a href="#" class="footer-widget__info__text">
                        7901 4th ST N, STE 4878, <br> ST.Petersburg Florida, 33702</a
                      >
                    </li>
                    <li>
                      <span class="footer-widget__info__icon"
                        ><i class="fas fa-phone-alt"></i
                      ></span>
                      <div class="footer-widget__info__text">
                        <a href="tel:+17079486213">+1(707)–948–6213</a>
                      </div>
                      <!-- /.footer-widget__info__text -->
                    </li>
                  </ul>
                  <!-- /.list-unstyled -->
                </div>
                <!-- /.footer-widget -->
              </div>
            </div>
            <!-- /.row -->
          </div><!-- /.container -->
                <img src="assets/images/shapes/footer-shape-1-1.png" alt="shape" class="main-footer__shape-one">
                <img src="assets/images/shapes/footer-shape-1-2.png" alt="shape" class="main-footer__shape-two">
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> by Pure Medical Billing Solutions.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer>

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div><!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
            <div class="logo-box logo-retina">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/logo-light.png" width="212" alt="">
                </a>
            </div><!-- /.logo-box -->
            <div class="mobile-nav__container"></div><!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                    <a href="mailto:needhelp@insuba.com">info@puremedicalbilling.com</a>
                </li>
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social social-links">
                <a href="https://www.facebook.com/profile.html?id=61555900199388" target="_blank">
                    <span class="social-links__icon">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </span><!-- /.social-links__icon -->
                </a>
                <a href="https://pinterest.com">
                    <span class="social-links__icon">
                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </span><!-- /.social-links__icon -->
                </a>
                <a href="https://twitter.com">
                    <span class="social-links__icon">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </span><!-- /.social-links__icon -->
                </a>
                <a href="https://www.instagram.com/pure.medical.billing.solutions" target="_blank">
                    <span class="social-links__icon">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </span><!-- /.social-links__icon -->
                </a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__content -->
    </div><!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="insuba-btn insuba-btn--base">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

<?php
    include "includes/scripts.php";
    ?>
</body>

</html>