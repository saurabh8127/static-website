@extends('layouts.default')

@section('content')
     <!-- Main Content Wrapper Start -->
     <main class="main-content-wrapper">
      <!-- Slider area Start -->
      <section class="homepage-slider mb--10pt">
          <div class="element-carousel" data-slick-options='{
              "slidesToShow": 1,
              "autoplay": true
          }'>
              <div class="single-slide d-flex align-items-center"
                  style="background-image: url(assets/img/slider/slider-01.jpg);">
                  <div class="container">
                      <div class="row g-0">
                          <div class="col-lg-6 col-sm-8">
                              <div class="slider-content">
                                  <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp"
                                      data-duration=".3s" data-delay=".3s">Financial solutions for New business.
                                  </h1>
                                  <a href="#" class="btn" data-animation="fadeInUp" data-duration=".3s"
                                      data-delay=".6s">Financial Services</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="single-slide d-flex align-items-center"
                  style="background-image: url(assets/img/slider/slider-02.jpg);">
                  <div class="container">
                      <div class="row g-0">
                          <div class="col-lg-6 col-sm-8">
                              <div class="slider-content">
                                  <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp"
                                      data-duration=".3s" data-delay=".3s">Financial solutions for New business.
                                  </h1>
                                  <a href="#" class="btn" data-animation="fadeInUp" data-duration=".3s"
                                      data-delay=".6s">Financial Services</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Slider area End -->

      <!-- Feature Area Start -->
      <section class="feature-area mb--9pt5">
          <div class="container">
              <div class="row g-0 gutter-lg-30 justify-content-between">
                  <div class="col-xl-3 col-md-4 mb-sm--45">
                      <div class="feature">
                          <div class="feature__icon text-center">
                              <span class="icon icon-box icon-outline">
                                  <i class="ion-ios-lightbulb-outline"></i>
                              </span>
                          </div>
                          <div class="feature__info text-center">
                              <h3 class="feature__title">Get Idea</h3>
                              <p class="feature__desc">Lorem Ipsum is simply dummy text of the printing and
                                  typesetting industry.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-4 mb-sm--45">
                      <div class="feature">
                          <div class="feature__icon text-center">
                              <span class="icon icon-box icon-outline">
                                  <i class="ion-magnet"></i>
                              </span>
                          </div>
                          <div class="feature__info text-center">
                              <h3 class="feature__title">Make A Plan</h3>
                              <p class="feature__desc">Lorem Ipsum is simply dummy text of the printing and
                                  typesetting industry.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-4">
                      <div class="feature">
                          <div class="feature__icon text-center">
                              <span class="icon icon-box icon-outline">
                                  <i class="ion-pie-graph"></i>
                              </span>
                          </div>
                          <div class="feature__info text-center">
                              <h3 class="feature__title">Boost Your Business</h3>
                              <p class="feature__desc">Lorem Ipsum is simply dummy text of the printing and
                                  typesetting industry.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Feature Area End -->

      <!-- About Area Start -->
      <section class="about-area mb--9pt4">
          <div class="container-fluid p-0">
              <div class="row g-0">
                  <div class="col-md-6">
                      <div class="bg-image bg-sm-padding h-100" data-bg-image="assets/img/about/about-01.jpg">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="h-100 pt--13pt pt-sm--9pt5 pb--13pt3 pb-sm--9pt8 pl-12percent pl-sm--15 pr--15 bg-color"
                          data-bg-color="#f7f8f9">
                          <div class="max-width-470">
                              <div class="heading">
                                  <h2 class="mb--18">About Consulting</h2>
                                  <hr class="delimeter mb--22">
                              </div>
                              <p class="mb--25">It is a long established fact that a reader will be distracted by
                                  the readable content of a page when looking at its layout. The point of using
                                  Lorem is that it has a more-or-less normal distribution of letters, as opposed
                                  to using 'Content here, content here', making it look like readable English.
                                  Many desktop publishing packages</p>
                              <a href="#" class="btn">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- About Area End -->

      <!-- Services Area Start -->
      <section class="services-area mb--9pt mb-md--8pt5">
          <div class="container">
              <div class="row mb--60 mb-md--50">
                  <div class="col-12 text-center">
                      <h2>Our Services</h2>
                      <hr class="delimeter mx-auto">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-4 mb-sm--40">
                      <div class="service">
                          <figure class="service__image">
                              <img src="assets/img/services/service-01.jpg" alt="Service" class="w-100">
                              <a href="single-service.html" class="item-overlay"></a>
                          </figure>
                          <div class="service__info">
                              <h3 class="service__title"><a href="single-service.html">Planing For New
                                      Project.</a></h3>
                              <span class="service__category">
                                  <a href="#">Service</a>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-sm--40">
                      <div class="service">
                          <figure class="service__image">
                              <img src="assets/img/services/service-02.jpg" alt="Service" class="w-100">
                              <a href="single-service.html" class="item-overlay"></a>
                          </figure>
                          <div class="service__info">
                              <h3 class="service__title"><a href="single-service.html">Planing For New
                                      Project.</a></h3>
                              <span class="service__category">
                                  <a href="#">Service</a>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="service">
                          <figure class="service__image">
                              <img src="assets/img/services/service-03.jpg" alt="Service" class="w-100">
                              <a href="single-service.html" class="item-overlay"></a>
                          </figure>
                          <div class="service__info">
                              <h3 class="service__title"><a href="single-service.html">Planing For New
                                      Project.</a></h3>
                              <span class="service__category">
                                  <a href="#">Service</a>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Services Area End -->

      <!-- Tetimonial Area Start -->
      <section class="testimonial-area bg-color ptb--95 ptb-md--80 mb--9pt5" data-bg-color="#121420">
          <div class="testimonial-wrapper testimonial--horizontal--active">
              <div class="testimonial-container swiper-wrapper">
                  <div class="item swiper-slide">
                      <div class="testimonial testimonial-style-1">
                          <div class="testimonial__inner">
                              <div class="testimonial__desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                  </p>
                              </div>
                              <div class="testimonial__author">
                                  <figure class="testimonial__author--img">
                                      <img src="assets/img/others/client-2.jpg" alt="client">
                                  </figure>
                                  <div class="testimonial__author--info">
                                      <h3 class="testimonial__author--name">John Snow</h3>
                                      <p class="testimonial__author--role">PR Officer</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item swiper-slide">
                      <div class="testimonial testimonial-style-1">
                          <div class="testimonial__inner">
                              <div class="testimonial__desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                  </p>
                              </div>
                              <div class="testimonial__author">
                                  <figure class="testimonial__author--img">
                                      <img src="assets/img/others/client-1.jpg" alt="client">
                                  </figure>
                                  <div class="testimonial__author--info">
                                      <h3 class="testimonial__author--name">Sansa Stark</h3>
                                      <p class="testimonial__author--role">Marketing</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item swiper-slide">
                      <div class="testimonial testimonial-style-1">
                          <div class="testimonial__inner">
                              <div class="testimonial__desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                  </p>
                              </div>
                              <div class="testimonial__author">
                                  <figure class="testimonial__author--img">
                                      <img src="assets/img/others/client-3.jpg" alt="client">
                                  </figure>
                                  <div class="testimonial__author--info">
                                      <h3 class="testimonial__author--name">Arya Stark</h3>
                                      <p class="testimonial__author--role">Product Manager</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item swiper-slide">
                      <div class="testimonial testimonial-style-1">
                          <div class="testimonial__inner">
                              <div class="testimonial__desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                  </p>
                              </div>
                              <div class="testimonial__author">
                                  <figure class="testimonial__author--img">
                                      <img src="assets/img/others/client-2.jpg" alt="client">
                                  </figure>
                                  <div class="testimonial__author--info">
                                      <h3 class="testimonial__author--name">Tyrion</h3>
                                      <p class="testimonial__author--role">Marketing</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item swiper-slide">
                      <div class="testimonial testimonial-style-1">
                          <div class="testimonial__inner">
                              <div class="testimonial__desc">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                  </p>
                              </div>
                              <div class="testimonial__author">
                                  <figure class="testimonial__author--img">
                                      <img src="assets/img/others/client-2.jpg" alt="client">
                                  </figure>
                                  <div class="testimonial__author--info">
                                      <h3 class="testimonial__author--name">Barn Stark</h3>
                                      <p class="testimonial__author--role">HR</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Tetimonial Area End -->

      <!-- Gallery Area Start -->
      <section class="gallery-area mb--10pt mb-sm--8pt7">
          <div class="container">
              <div class="row mb--60 mb-md--50">
                  <div class="col-12 text-center">
                      <h2>Project Gallery</h2>
                      <hr class="delimeter mx-auto">
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="element-carousel" data-slick-options='{
                          "spaceBetween": 30,
                          "slidesToShow": 4,
                          "autoplay": false
                      }' data-slick-responsive='[
                          {"breakpoint": 992, "settings":{
                              "slidesToShow": 3
                          }},
                          {"breakpoint": 576, "settings":{
                              "slidesToShow": 2
                          }},
                          {"breakpoint": 450, "settings":{
                              "slidesToShow": 1
                          }}
                      ]'>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-01.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-02.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-03.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-04.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-01.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="portfolio">
                                  <div class="portfolio__inner">
                                      <figure class="portfolio__img">
                                          <a href="#" class="d-block">
                                              <img src="assets/img/portfolio/portfolio-02.jpg" alt="Portfolio"
                                                  class="w-100">
                                          </a>
                                      </figure>
                                      <div class="portfolio__info">
                                          <a href="#" class="portfolio__link">+</a>
                                          <h3 class="portfolio__title">
                                              <a href="#">Project Name</a>
                                          </h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Gallery Area End -->

      <!-- Contact Area Start -->
      <section class="contact-area mb--9pt mb-sm--7pt6">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 mb-sm--45">
                      <form action="mail.php" class="form" id="contact-form">
                          <input type="email" name="con_email" id="con_email" class="form__input mb--30"
                              placeholder="Email*">
                          <input type="text" name="con_name" id="con_name" class="form__input mb--30"
                              placeholder="Name*">
                          <textarea class="form__input form__input--textarea mb--30" placeholder="Message"
                              id="con_message" name="con_message"></textarea>
                          <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                          <div class="form__output"></div>
                      </form>
                  </div>
                  <div class="col-lg-5 col-md-6 offset-lg-1">
                      <div class="contact-widget">
                          <p class="text-uppercase color--dust lh-1 mb--5">Contact Us</p>
                          <h2 class="heading__secondary mb--30">
                              <span class="heading__secondary--main">Don't Hesitate to Contact us for any</span>
                              <span class="heading__secondary--sub">Information</span>
                          </h2>
                          <p class="m-0 color--dust">Contact us for immediate support to this number</p>
                          <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Contact Area End -->

      <!-- Blog Area Start -->
      <section class="blog-area mb--9pt3 mb-sm--8pt8">
          <div class="container">
              <div class="row mb--60 mb-md--50">
                  <div class="col-12 text-center">
                      <h2>From Our Blog</h2>
                      <hr class="delimeter mx-auto">
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="element-carousel" data-slick-options='{
                          "spaceBetween": 30,
                          "slidesToShow": 3,
                          "autoplay": true
                      }' data-slick-responsive='[
                          {"breakpoint": 1200, "settings": {"slidesToShow": 3}},
                          {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                          {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                      ]'>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-06-560x345.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-07-560x345.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-08-560x345.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-09-560x345.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-10-560x345.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                          <div class="item">
                              <article class="blog">
                                  <div class="blog__inner">
                                      <div class="blog__media">
                                          <figure class="image">
                                              <img src="assets/img/blog/blog-11-560x345.png" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </figure>
                                      </div>
                                      <div class="blog__info">
                                          <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                                  planing for a startup business</a></h3>
                                          <div class="blog__meta">
                                              <span class="posted-on">13.02.2019</span>
                                              <span class="posted-by"><span>By: </span><a
                                                      href="blog-details-image.html">Robert Joe</a></span>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Blog Area End -->

      <!-- Brand Logo Area Start -->
      <div class="brand-logo-area bg-color ptb--100 ptb-md--80" data-bg-color="#121420">
          <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-xl-11">
                      <div class="element-carousel" data-slick-options='{
                          "slidesToShow": 5,
                          "autoplay": true
                      }' data-slick-responsive='[
                          {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                          {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                          {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                          {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                      ]'>
                          <div class="item">
                              <figure>
                                  <img src="assets/img/brand/brand-01.png" alt="Brand" class="mx-auto">
                              </figure>
                          </div>
                          <div class="item">
                              <figure>
                                  <img src="assets/img/brand/brand-02.png" alt="Brand" class="mx-auto">
                              </figure>
                          </div>
                          <div class="item">
                              <figure>
                                  <img src="assets/img/brand/brand-03.png" alt="Brand" class="mx-auto">
                              </figure>
                          </div>
                          <div class="item">
                              <figure>
                                  <img src="assets/img/brand/brand-04.png" alt="Brand" class="mx-auto">
                              </figure>
                          </div>
                          <div class="item">
                              <figure>
                                  <img src="assets/img/brand/brand-05.png" alt="Brand" class="mx-auto">
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Brand Logo Area End -->
     </main>
  <!-- Main Content Wrapper End -->
  @endsection