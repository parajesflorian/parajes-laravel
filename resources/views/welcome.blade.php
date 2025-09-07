<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Unique Style</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../landing-page/assets/img/urb.png" rel="icon">
  <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../landing-page/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maxim
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Urbanian</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
           <li><a href="#" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" method="POST" action="{{ ('logout') }}">
              @csrf
          </form>
        </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="../../../landing-page/assets/img/bg.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Welcome to URBANIAN</h2>
            <p>You can explore more.</p>
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Urbanian is a lifestyle clothing brand that blends streetwear, casual, and formal styles—designed for those who move with the rhythm of the city.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="../../../landing-page/assets/img/bout.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>"Style that Moves with You"</h3>
              <p class="fst-italic">
                At Urbanian, we craft apparel for modern lifestyles—where streetwear meets sophistication, and fashion flows with the rhythm of the city.
              </p>
              <ul>
                <li>
                  <div>
                    <h4>Quality Materials</h4>
                    <p>We source premium fabrics that are both sustainable and durable meant to last, wear after wear.</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h4> Versatile Designs</h4>
                    <p>Urbanian fits all walks of life casual afternoons, bold nights, and everything in between.</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h4>Community-Driven</h4>
                    <p>Inspired by our customers, built around connection. Your voice shapes our collections.</p>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>At Urbanian, we offer more than just clothing. We deliver a lifestyle experience from personalized fashion advice to community-driven events that inspire and connect.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-person-lines-fill icon"></i>
              <div>
                <h3>Personal Styling Assistance</h3>
                <p>Need help finding the perfect fit or style for an occasion? Our fashion experts are here to guide your wardrobe choices.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-scissors icon"></i>
              <div>
                <h3>Custom Orders & Alterations</h3>
                <p>We provide limited customization and tailoring options to make sure your Urbanian pieces fit just right.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-truck icon"></i>
              <div>
                <h3>Express Delivery & Easy Returns</h3>
                <p>Get your favorites fast. We offer next-day delivery in select areas and a hassle-free return process.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-book-half icon"></i>
              <div>
                <h3>Lookbook & Style Inspiration</h3>
                <p>Browse curated outfits and fashion tips on our social media to get inspired by real Urbanian looks.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-megaphone icon"></i>
              <div>
                <h3>Pop-Up Events & Collabs</h3>
                <p>Join our exclusive in-person pop-up stores and designer collaborations. Meet the brand, discover the style.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-recycle icon"></i>
              <div>
                <h3>Sustainable Fashion Commitment</h3>
                <p>We're working toward eco-friendly practices using recycled packaging, ethical sourcing, and more.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Customer Testimony</h2>
        <p>What our customers say about Urbanian</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                <span>Urbanian gets it. The quality, the fit, the vibe it’s all there. My followers always ask where I shop, and this brand is my go-to.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="../../../landing-page/assets/img/testimonials/ritz.jpg" class="testimonial-img" alt="">
                <h3>Ritz Fernandez</h3>
                <h4>Fashion Blogger</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>From campus to hangouts, Urbanian's pieces keep me comfortable and confident. Affordable but never basic.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="../../../landing-page/assets/img/testimonials/chrysler.jpg" class="testimonial-img" alt="">
                <h3>Chrysler Duaso</h3>
                <h4>College Student</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I’m constantly on the move. Urbanian’s style blends streetwear with utility and that’s exactly what I need for work and play.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="../../../landing-page/assets/img/testimonials/frenz.jpg" class="testimonial-img" alt="">
                <h3>Frenz Tapia</h3>
                <h4>Creative Director</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Shooting in the city means I need clothes that are camera-ready and comfortable. Urbanian nails it every time.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="../../../landing-page/assets/img/testimonials/reygie.jpg" class="testimonial-img" alt="">
                <h3>Reygie Johnson</h3>
                <h4>Freelancer Photographer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I love how Urbanian balances street style with everyday wear. It’s the only brand I trust when I want to look sharp without trying too hard.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="../../../landing-page/assets/img/testimonials/josh.jpg" class="testimonial-img" alt="">
                <h3>Joshua Barnayha</h3>
                <h4>Content Creator</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Browse our recent collections, street-style campaigns, and creative collaborations that reflect the Urbanian lifestyle.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear1.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear2.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear3.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear4.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear5.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear6.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear7.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear8.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear9.jpg" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear10.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear10.jpg" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear11.jpg" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="../../../landing-page/assets/img/portfolio/wear12.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="../../../landing-page/assets/img/portfolio/wear12.jpg" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p style="color: 	#222222;">Behind every stitch and style is a passionate team dedicated to crafting the Urbanian lifestyle.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="../../../landing-page/assets/img/team/t1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Florian Parajes</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href="https://www.facebook.com/florian.parajes/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/f_parajes/"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="../../../landing-page/assets/img/team/t2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Trixie Tinapao</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="../../../landing-page/assets/img/team/t3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Fritz Raganas</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="../../../landing-page/assets/img/team/t4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ma. Luna Redoble</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Have a question, a collaboration idea, or just want to say hi? We’d love to hear from you</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>West Poblacion, City of Naga Cebu</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+63 961 791 4882</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>parajesflorian@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.672604124925!2d123.7480994743907!3d10.20721996943609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a979ad40a515c3%3A0xac4512668a3d0000!2s320%20Naga%20-%20Uling%20Rd%2C%20Naga%2C%20Cebu!5e0!3m2!1sen!2sph!4v1752043088029!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="../../../landing-page/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">URBANIAN</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Bonifacio Street</p>
            <p>City of Naga Cebu</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+63 961 791 4882</span></p>
            <p><strong>Email:</strong> <span>parajesflorian@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Dashboard</a></li>
            <li><a href="#about"><i class="bi bi-chevron-right"></i> About us</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right"></i> Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Web Design</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Web Development</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Product Management</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Marketing</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our channel and receive the latest updates about our products and services!</p>
          <form action="../../../landing-page/forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../landing-page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../landing-page/assets/js/main.js"></script>

</body>

</html>