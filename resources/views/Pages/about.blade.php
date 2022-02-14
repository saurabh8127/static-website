@extends('layouts.default')

@section('content')

<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="page-title">About Us</h1>
              <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="current"><span>About Us</span></li>
              </ul>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
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

  <!-- Skoll Area Start -->
  <section class="skill-area mb--9pt3 mb-md--8pt9">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-md--38">
                  <div class="heading mb--30">
                      <h2 class="text-uppercase mb--25">What i'm doing</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eaque, quo
                          necessitatibus repudiandae soluta a architecto animi, earum voluptates sed!</p>
                  </div>
                  <div class="about-grid">
                      <div class="about-box">
                          <div class="about-box__inner">
                              <div class="about-box__icon">
                                  <i class="fa fa-flag"></i>
                              </div>
                              <div class="about-box__info">
                                  <h4>Branding</h4>
                                  <p>All Product</p>
                              </div>
                          </div>
                      </div>
                      <div class="about-box">
                          <div class="about-box__inner">
                              <div class="about-box__icon">
                                  <i class="fa fa-paint-brush"></i>
                              </div>
                              <div class="about-box__info">
                                  <h4>Design</h4>
                                  <p>Website</p>
                              </div>
                          </div>
                      </div>
                      <div class="about-box">
                          <div class="about-box__inner">
                              <div class="about-box__icon">
                                  <i class="fa fa-briefcase"></i>
                              </div>
                              <div class="about-box__info">
                                  <h4>Marketing</h4>
                                  <p>All Product</p>
                              </div>
                          </div>
                      </div>
                      <div class="about-box">
                          <div class="about-box__inner">
                              <div class="about-box__icon">
                                  <i class="fa fa-headphones"></i>
                              </div>
                              <div class="about-box__info">
                                  <h4>Support</h4>
                                  <p>Fast & Friendly</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="heading">
                      <h2 class="text-uppercase mb--18">Skill & Abilities</h2>
                  </div>
                  <div class="prgoress-wrapper">
                      <div class="progress-charts">
                          <div class="progress">
                              <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                  data-wow-delay=".3s" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                  aria-valuemax="100">
                                  <span class="percent-label">95%</span>
                              </div>
                          </div>
                          <p class="progress-title">Unique Design</p>
                      </div>
                      <div class="progress-charts">
                          <div class="progress">
                              <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                  data-wow-delay=".3s" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                  aria-valuemax="100">
                                  <span class="percent-label">80%</span>
                              </div>
                          </div>
                          <p class="progress-title">Smart Code</p>
                      </div>
                      <div class="progress-charts">
                          <div class="progress">
                              <div class="progress-bar wow fadeInLeft" data-wow-duration="1s"
                                  data-wow-delay=".3s" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                  aria-valuemax="100">
                                  <span class="percent-label">90%</span>
                              </div>
                          </div>
                          <p class="progress-title">User Experience</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Skoll Area End -->

  <!-- CTA Area Start -->
  <section class="cta-area ptb--60 pb-sm--65 plr--45 bg-color" data-bg-color="#202020">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-8 text-md-start text-center mb-sm--15">
                  <h3 class="color--white">You Need Help?</h3>
                  <p class="color--white lh-1pt5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Ducimus, maiores.</p>
              </div>
              <div class="col-md-4 text-md-end text-center">
                  <a href="#" class="btn btn-outline btn-white btn-brw-2 btn-hover-1">Contact Us</a>
              </div>
          </div>
      </div>
  </section>
  <!-- CTA Area End -->
</main>
<!-- Main Content Wrapper End -->
@endsection