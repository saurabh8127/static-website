@extends('layouts.default')

@section('content')

 <!-- Breadcrumb area Start -->
 <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="page-title">Our Services</h1>
              <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="current"><span>Our Services</span></li>
              </ul>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
  <div class="inner-page-content mt--9pt5">
      <!-- Services Area Start -->
      <section class="services-area mb--9pt mb-md--8pt6 mb-sm--7pt6">
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

      <!-- Skill Area Start -->
      <section class="skill-area mb--9pt5 mb-lg--8pt7 mb-sm--9pt4">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 mb-sm--45">
                      <div class="heading mb--26">
                          <h3>Keep Track Your workout</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, quas!</p>
                      </div>
                      <div class="prgoress-wrapper">
                          <div class="progress-charts">
                              <div class="progress">
                                  <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                      data-wow-delay=".3s" role="progressbar" aria-valuenow="95"
                                      aria-valuemin="0" aria-valuemax="100">
                                      <span class="percent-label">95%</span>
                                  </div>
                              </div>
                              <p class="progress-title">Unique Design</p>
                          </div>
                          <div class="progress-charts">
                              <div class="progress">
                                  <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                      data-wow-delay=".3s" role="progressbar" aria-valuenow="80"
                                      aria-valuemin="0" aria-valuemax="100">
                                      <span class="percent-label">80%</span>
                                  </div>
                              </div>
                              <p class="progress-title">Smart Code</p>
                          </div>
                          <div class="progress-charts">
                              <div class="progress">
                                  <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                      data-wow-delay=".3s" role="progressbar" aria-valuenow="90"
                                      aria-valuemin="0" aria-valuemax="100">
                                      <span class="percent-label">90%</span>
                                  </div>
                              </div>
                              <p class="progress-title">User Experience</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <figure>
                          <img src="assets/img/bg/bg-01.jpg" alt="Service Image" class="w-100">
                      </figure>
                  </div>
              </div>
          </div>
      </section>
      <!-- Skill Area End -->

      <!-- Pricing Area Start -->
      <section class="pricing-area mb--10pt">
          <div class="container">
              <div class="row mb--40 mb-md--30">
                  <div class="col-12 text-center">
                      <h2>Pricing Plan</h2>
                      <hr class="delimeter mx-auto">
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="element-carousel" data-slick-options='{
                          "spaceBetween": 30,
                          "slidesToShow": 3,
                          "slidesToscroll": 1,
                          "autoplay": true
                      }' data-slick-responsive='[
                          {"breakpoint": 992, "settings":{
                              "slidesToShow": 2
                          }},
                          {"breakpoint": 768, "settings":{
                              "slidesToShow": 1
                          }}
                      ]'>
                          <div class="item">
                              <div class="pricing">
                                  <div class="pricing__inner">
                                      <div class="pricing__header">
                                          <figure class="pricing__icon">
                                              <img src="assets/img/icons/icon-crown-01.png" alt="Crown Icon"
                                                  class="mx-auto">
                                          </figure>
                                          <h2 class="pricing__title font-weight-normal">Starters</h2>
                                      </div>
                                      <div class="pricing__body">
                                          <p class="pricing__desc">Lorem Ipsum is simply dummy text of the
                                              printing and typesetting industry.</p>
                                          <h2 class="pricing__price">
                                              <span class="pricing__price--sub">Started at</span>
                                              <span class="pricing__price--main">$0</span>
                                              <span class="pricing__price--sub">Per Month</span>
                                          </h2>
                                      </div>
                                      <div class="pricing__footer">
                                          <a href="#" class="btn btn-shape-round">Buy Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="pricing">
                                  <div class="pricing__inner">
                                      <div class="pricing__header">
                                          <figure class="pricing__icon">
                                              <img src="assets/img/icons/icon-crown-02.png" alt="Crown Icon"
                                                  class="mx-auto">
                                          </figure>
                                          <h2 class="pricing__title font-weight-normal">Scalability</h2>
                                      </div>
                                      <div class="pricing__body">
                                          <p class="pricing__desc">Lorem Ipsum is simply dummy text of the
                                              printing and typesetting industry.</p>
                                          <h2 class="pricing__price">
                                              <span class="pricing__price--sub">Started at</span>
                                              <span class="pricing__price--main">$40.00</span>
                                              <span class="pricing__price--sub">Per Month</span>
                                          </h2>
                                      </div>
                                      <div class="pricing__footer">
                                          <a href="#" class="btn btn-shape-round">Buy Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="pricing">
                                  <div class="pricing__inner">
                                      <div class="pricing__header">
                                          <figure class="pricing__icon">
                                              <img src="assets/img/icons/icon-crown-03.png" alt="Crown Icon"
                                                  class="mx-auto">
                                          </figure>
                                          <h2 class="pricing__title font-weight-normal">Enterprise</h2>
                                      </div>
                                      <div class="pricing__body">
                                          <p class="pricing__desc">Lorem Ipsum is simply dummy text of the
                                              printing and typesetting industry.</p>
                                          <h2 class="pricing__price">
                                              <span class="pricing__price--sub">Started at</span>
                                              <span class="pricing__price--main">$90.00</span>
                                              <span class="pricing__price--sub">Per Month</span>
                                          </h2>
                                      </div>
                                      <div class="pricing__footer">
                                          <a href="#" class="btn btn-shape-round">Buy Now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Pricing Area End -->
  </div>
</main>
<!-- Main Content Wrapper End -->


@endsection