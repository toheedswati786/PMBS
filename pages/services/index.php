<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
    include 'includes/links.php';

    ?>
  </head>

  <body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader" style="background-color: white !important">
      <div
        class="preloader__image"
        style="background-image: url(assets/images/loader.png)"
      ></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
      <div class="header">
        <div class="topbar topbar--one">
          <div class="topbar__bg"></div>
          <!-- /.topbar__bg -->
          <div class="container-fluid">
            <div class="topbar__inner">
              <ul class="list-unstyled topbar__info">
                <li>
                  <div class="topbar__info__icon-box topbar__info__icon--email">
                    <span class="topbar__info__icon">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                  <a href="mailto:info@puremedicalbilling.com"
                    >info@puremedicalbilling.com</a
                  >
                </li>
                <li>
                  <div class="topbar__info__icon-box">
                    <span class="topbar__info__icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </span>
                  </div>
                  <a href="https://www.google.com/maps/place/7901+4th+St+N+%234878,+St.+Petersburg,+FL+33702/@27.844386,-82.638182,16z/data=!4m6!3m5!1s0x88c2e6a2b7850c2f:0x8dd58ca8e357d5cc!8m2!3d27.8443863!4d-82.638182!16s%2Fg%2F11s5j6nss0?hl=en&entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D" target="_blank"
                    >7901 4th ST N, STE 4878, ST.Petersburg Florida, 33702.</a
                  >
                </li>
              </ul>
              <!-- /.list-unstyled topbar__info -->
              <div class="topbar__right">
                <div class="topbar__social social-links">
                  <a
                    href="https://www.facebook.com/profile.html?id=61555900199388"
                    target="_blank"
                  >
                    <span class="social-links__icon">
                      <i class="fab fa-facebook-f" aria-hidden="true"></i>
                      <span class="sr-only">Facebook</span> </span
                    ><!-- /.social-links__icon -->
                  </a>
                  <a
                    href="https://www.instagram.com/pure.medical.billing.solutions"
                    target="_blank"
                  >
                    <span class="social-links__icon">
                      <i class="fab fa-instagram" aria-hidden="true"></i>
                      <span class="sr-only">Instagram</span> </span
                    ><!-- /.social-links__icon -->
                  </a>
                </div>
              </div>
              <!-- /.topbar__right -->
            </div>
            <!-- /.topbar__inner -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.topbar -->

        <?php
        include 'includes/header.php';
        ?>
        <!-- /.main-header -->
      </div>
      <!-- /.header -->
      <section class="page-header">
        <div
          class="page-header__bg"
          style="
            background-image: url(assets/images/backgrounds/page-header-bg.png);
          "
        ></div>
        <!-- /.page-header__bg -->
        <div class="container">
          <div class="page-header__content">
            <h2 class="page-header__title">Our Core Services</h2>
          </div>
          <!-- /.page-header__content -->
        </div>
        <!-- /.container -->
        <img
          src="assets/images/resources/page-header-1-1.png"
          alt="image"
          class="page-header__image"
        />
        <img
          src="assets/images/shapes/page-header-shape-1-1.png"
          alt="shape"
          class="page-header__shape-one"
        />
        <div class="page-header__shape-two"></div>
        <!-- /.page-header__shape-two -->
        <div class="page-header__shape-three"></div>
        <!-- /.page-header__shape-three -->
        <div class="page-header__shape-four"></div>
        <!-- /.page-header__shape-three -->
      </section>
      <!-- /.page-header -->

      <section class="services-page section-space-top section-space-bottom2">
        <div class="container">
          <div class="row gutter-y-30">
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="00ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-1.png"
                    alt="Car Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-headset"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url?>Virtual-Assistance"
                      >Virtual Assistance</a
                    >
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Our virtual assistance services provide seamless support for
                    medical practices, handling all inbound and outbound calls,
                    checking patient eligibility, scheduling and rescheduling
                    appointments, and managing paperwork.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url?>Virtual-Assistance"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="100ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-2.png"
                    alt="life insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-file-signature"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Payer-Credentialing"
                      >Payer Credentialing
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    We manage the complex process of payer credentialing,
                    ensuring your practice is properly enrolled with various
                    insurance providers. Our experts handle all paperwork and
                    verification processes, facilitating smooth interactions
                    with payers, and follow up on applications until completion.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Payer-Credentialing"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="200ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-3.png"
                    alt="Business Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-file-invoice-dollar"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Medical-Billing"
                      >Medical Billing & Coding Services
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Our medical billing services are designed to maximize
                    revenue and minimize errors. By utilizing advanced software
                    and industry expertise, we streamline the billing process to
                    enhance your practice’s financial stability.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Medical-Billing"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="00ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-4.png"
                    alt="Healthy Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-sync-alt"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Revenue-Cycle-Management"
                      >Revenue Cycle Management (RCM)
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Revenue cycle management (RCM) tracks patient care from
                    registration to final payment, ensuring efficient financial
                    operations. By using advanced billing software and
                    strategies, healthcare providers can optimize their
                    financial processes and focus on delivering quality patient
                    care.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Revenue-Cycle-Management"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="100ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-5.png"
                    alt="Home Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-laptop-code"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Web-Designing"
                      >Web Designing & Development
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Crafting stunning websites and portfolios that showcase your
                    vision with expert design and development.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Web-Designing"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="200ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-6.png"
                    alt="Finance Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-file-medical"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Eligibility-Verification"
                      >Eligibility Verification
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Eligibility and Benefits Verification is essential for
                    providers to ensure that the patient’s insurance covers the
                    services and procedures. By having detailed and accurate
                    records of insurance coverage, healthcare providers can more
                    efficiently plan and provide care to their patients, as well
                    as streamline billing processes.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Eligibility-Verification"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="00ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-7.png"
                    alt="Car Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-hand-holding-usd"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Account-Receivable"
                      >Account Receivable
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Our medical billing services are designed to maximize
                    revenue and minimize errors. By utilizing advanced software
                    and industry expertise, we streamline the billing process to
                    enhance your practice’s financial stability.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Account-Receivable"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="100ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-8.png"
                    alt="life insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-ban"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Denial-Management"
                      >Denial Management
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Revenue cycle management (RCM) tracks patient care from
                    registration to final payment, ensuring efficient financial
                    operations. By using advanced billing software and
                    strategies, healthcare providers can optimize their
                    financial processes and focus on delivering quality patient
                    care.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Denial-Management"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
            <!-- /.col-lg-4 col-md-6 -->
            <div
              class="col-lg-4 col-md-6 wow fadeInUp"
              data-wow-duration="1500ms"
              data-wow-delay="200ms"
            >
              <div class="service-card-three">
                <div class="service-card-three__image">
                  <img
                    src="assets/images/services/img-9.png"
                    alt="Business Insurance"
                  />
                </div>
                <!-- /.service-card-three__image -->
                <div class="service-card-three__content">
                  <div class="service-card-three__icon-box">
                    <span class="service-card-three__icon"
                      ><i class="fa fa-clipboard-check"></i
                    ></span>
                  </div>
                  <!-- /.service-card-three__icon-box -->
                  <h3 class="service-card-three__title">
                    <a href="<?= $service_base_url;?>Prior-Authorization"
                      >Prior Authorization
                    </a>
                  </h3>
                  <!-- /.service-card-three__title -->
                  <p class="service-card-three__text">
                    Prior authorization is an important part of medical billing
                    and coding because it helps ensure patients get the right
                    coverage for their medical treatments. Without prior
                    authorization, an insurance company might not pay for a
                    medical procedure or test, leaving the patient with a bill
                    they didn’t expect. At PMBS, we know how important it is to
                    get prior authorization quickly and correctly, which is why
                    we offer full support to healthcare providers.
                  </p>
                  <!-- /.service-card-three__text -->
                  <a
                    href="<?= $service_base_url;?>Prior-Authorization"
                    class="service-card-three__link"
                    >Read More <i class="icon-plus"></i></a
                  ><!-- /.service-card-three__link -->
                </div>
                <!-- /.service-card-three__content -->
                <img
                  src="assets/images/shapes/service-card-shape-3-1.png"
                  alt="shape"
                  class="service-card-three__shape"
                />
              </div>
              <!-- /.service-card-three -->
            </div>
          </div>
          <!-- /.row gutter-y-30 -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.services-page -->

      <div class="newsletter @@extraClassName">
        <div class="container">
          <div
            class="newsletter__inner wow fadeInUp"
            data-wow-duration="1500ms"
          >
            <div class="newsletter__inner__bg">
              <img
                src="assets/images/shapes/newsletter-shape-1-1.png"
                alt="shape"
                class="newsletter__shape-one"
              />
              <img
                src="assets/images/shapes/newsletter-shape-1-2.png"
                alt="shape"
                class="newsletter__shape-two"
              />
            </div>
            <!-- /.newsletter__inner__bg -->
            <div class="newsletter__image">
              <img
                src="assets/images/resources/newsletter-1-1.png"
                alt="newsletter"
                class="newsletter__image__one"
              />
              <img
                src="assets/images/shapes/newsletter-shape-1-3.png"
                alt="shape"
                class="newsletter__image__shape"
              />
            </div>
            <!-- /.newsletter__image -->
            <div class="newsletter__form">
              <h3 class="newsletter__form__title">
                Get an overview of all our services
              </h3>
              <!-- /.newsletter__form__title -->
              <form
                action="#"
                data-url="MAILCHIMP_FORM_URL"
                class="newsletter__form__form mc-form"
              >
                <input
                  type="text"
                  name="EMAIL" id="contact-email"
                  placeholder="Your email address"
                />
                <button type="submit" onclick="submitForm()" class="insuba-btn">
                  <span>Submit</span>
                </button>
              </form>
              <!-- /.newsletter__form__form mc-form -->
              <div class="mc-form__response"></div>
              <!-- /.mc-form__response -->
            </div>
            <!-- /.newsletter__form -->
          </div>
          <!-- /.newsletter__inner -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.newsletter -->
<script>
    function submitForm(){
        var emailContainer = document.getElementById('contact-email');
        var value = emailContainer.value;
        window.location.href = 'contact.php?email=' + encodeURIComponent(value);
    }
</script>
      <footer class="main-footer @@extraClassName">
        <div class="main-footer__top">
          <div
            class="main-footer__bg"
            style="
              background-image: url(assets/images/backgrounds/footer-bg.jpg);
            "
          ></div>
          <!-- /.main-footer__bg -->
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
                      alt="Insuba HTML Template"
                      style="
                        background-color: white;
                        padding: 10px;
                        border-radius: 29px;
                      "
                    /> </a
                  ><!-- /.footer-widget__logo -->
                  <p class="footer-widget__about">
                    We provide billing and RCM services tailored for therapists
                    and psychiatrists while ensuring you stay connected with our
                    company’s newest updates.
                  </p>
                  <!-- /.footer-widget__about -->
                  <div class="social-links">
                    <a
                      href="https://www.facebook.com/profile.html?id=61555900199388"
                      target="_blank"
                    >
                      <span class="social-links__icon">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span> </span
                      ><!-- /.social-links__icon -->
                    </a>
                    <a
                      href="https://www.instagram.com/pure.medical.billing.solutions"
                      target="_blank"
                    >
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
                        7901 4th ST N, STE 4878, <br />
                        ST.Petersburg Florida, 33702</a
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
          </div>
          <!-- /.container -->
          <img
            src="assets/images/shapes/footer-shape-1-1.png"
            alt="shape"
            class="main-footer__shape-one"
          />
          <img
            src="assets/images/shapes/footer-shape-1-2.png"
            alt="shape"
            class="main-footer__shape-two"
          />
        </div>
        <!-- /.main-footer__top -->
        <div class="main-footer__bottom">
          <div class="container">
            <div class="main-footer__bottom__inner">
              <p class="main-footer__copyright">
                &copy; Copyright <span class="dynamic-year"></span> by Pure
                Medical Billing Solutions.
              </p>
            </div>
            <!-- /.main-footer__inner -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.main-footer__bottom -->
      </footer>
    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
      <div class="mobile-nav__overlay mobile-nav__toggler"></div>
      <!-- /.mobile-nav__overlay -->
      <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"
          ><i class="icon-close"></i
        ></span>
        <div class="logo-box logo-retina">
          <a href="index.html" aria-label="logo image">
            <img src="assets/images/logo-light.png" width="212" alt="" />
          </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
          <li>
            <span class="mobile-nav__contact__icon"
              ><i class="fa fa-envelope"></i
            ></span>
            <a href="mailto:needhelp@insuba.com">info@puremedicalbilling.com</a>
          </li>
          <li>
            <span class="mobile-nav__contact__icon"
              ><i class="fa fa-phone-alt"></i
            ></span>
            <a href="tel:+9156980036420">+91 5698 0036 420</a>
          </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social social-links">
          <a
            href="https://www.facebook.com/profile.html?id=61555900199388"
            target="_blank"
          >
            <span class="social-links__icon">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
              <span class="sr-only">Facebook</span> </span
            ><!-- /.social-links__icon -->
          </a>
          <a href="https://pinterest.com">
            <span class="social-links__icon">
              <i class="fab fa-pinterest-p" aria-hidden="true"></i>
              <span class="sr-only">Pinterest</span> </span
            ><!-- /.social-links__icon -->
          </a>
          <a href="https://twitter.com">
            <span class="social-links__icon">
              <i class="fab fa-twitter" aria-hidden="true"></i>
              <span class="sr-only">Twitter</span> </span
            ><!-- /.social-links__icon -->
          </a>
          <a
            href="https://www.instagram.com/pure.medical.billing.solutions"
            target="_blank"
          >
            <span class="social-links__icon">
              <i class="fab fa-instagram" aria-hidden="true"></i>
              <span class="sr-only">Instagram</span> </span
            ><!-- /.social-links__icon -->
          </a>
        </div>
        <!-- /.mobile-nav__social -->
      </div>
      <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
      <div class="search-popup__overlay search-toggler"></div>
      <!-- /.search-popup__overlay -->
      <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
          <input type="text" id="search" placeholder="Search Here..." />
          <button
            type="submit"
            aria-label="search submit"
            class="insuba-btn insuba-btn--base"
          >
            <i class="icon-search"></i>
          </button>
        </form>
      </div>
      <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
      <span class="scroll-to-top__text">back top</span>
      <span class="scroll-to-top__wrapper"
        ><span class="scroll-to-top__inner"></span
      ></span>
    </a>

    <?php
    include 'includes/scripts.php';
    ?>
  </body>
</html>
