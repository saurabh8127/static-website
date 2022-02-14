@extends('layouts.default')

@section('content')
<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="page-title">Blog</h1>
              <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="current"><span>Blog</span></li>
              </ul>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
  <div class="inner-page-content mt--9pt4">
      <div class="container">
          <div class="row mb--10pt">
              <div class="col-lg-9 mb-md--50">
                  <div class="row">
                      <div class="col-12 mb--50">
                          <article class="blog format-standard">
                              <div class="blog__inner">
                                  <div class="blog__media">
                                      <figure class="image">
                                          <img src="assets/img/blog/blog-06.jpg" alt="Blog Image"
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
                                      <div class="blog__desc">
                                          <p>Financial services must tie these three factors together –
                                              customer experience, best practices and
                                              reliability/responsiveness – to have an effective web presence.
                                              They can’t go hard into one particular area and ignore the
                                              others.</p>
                                      </div>
                                      <div class="blog__footer-meta">
                                          <a href="blog-details-image.html" class="read-more-btn">Read
                                              More</a>
                                          <div class="social-share">
                                              <span>Share <i class="fa fa-share-alt"></i></span>
                                              <ul class="social social-shape-square space-5">
                                                  <li class="social__item">
                                                      <a href="https://www.facebook.com"
                                                          class="social__link facebook">
                                                          <i class="fa fa-facebook"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.twitter.com"
                                                          class="social__link twitter">
                                                          <i class="fa fa-twitter"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.plus.google.com"
                                                          class="social__link gplus">
                                                          <i class="fa fa-google-plus"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <div class="col-12 mb--50">
                          <article class="blog format-gallery">
                              <div class="blog__inner">
                                  <div class="blog__media">
                                      <div class="element-carousel" data-slick-options='{
                                          "slidesToShow": 1,
                                          "slidesToScroll": 1,
                                          "autoplay": true,
                                          "autoplaySpeed": 1500
                                      }'>
                                          <div class="item">
                                              <img src="assets/img/blog/blog-07.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </div>
                                          <div class="item">
                                              <img src="assets/img/blog/blog-08.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </div>
                                          <div class="item">
                                              <img src="assets/img/blog/blog-09.jpg" alt="Blog Image"
                                                  class="w-100">
                                              <a href="blog-details-image.html" class="item-overlay"></a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="blog__info">
                                      <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                              planing for a startup business</a></h3>
                                      <div class="blog__meta">
                                          <span class="posted-on">13.02.2019</span>
                                          <span class="posted-by"><span>By: </span><a
                                                  href="blog-details-image.html">Robert Joe</a></span>
                                      </div>
                                      <div class="blog__desc">
                                          <p>Financial services must tie these three factors together –
                                              customer experience, best practices and
                                              reliability/responsiveness – to have an effective web presence.
                                              They can’t go hard into one particular area and ignore the
                                              others.</p>
                                      </div>
                                      <div class="blog__footer-meta">
                                          <a href="blog-details-image.html" class="read-more-btn">Read
                                              More</a>
                                          <div class="social-share">
                                              <span>Share <i class="fa fa-share-alt"></i></span>
                                              <ul class="social social-shape-square space-5">
                                                  <li class="social__item">
                                                      <a href="https://www.facebook.com"
                                                          class="social__link facebook">
                                                          <i class="fa fa-facebook"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.twitter.com"
                                                          class="social__link twitter">
                                                          <i class="fa fa-twitter"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.plus.google.com"
                                                          class="social__link gplus">
                                                          <i class="fa fa-google-plus"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <div class="col-12 mb--50">
                          <article class="blog format-audio">
                              <div class="blog__inner">
                                  <div class="blog__media">
                                      <div class="ratio ratio-16x9">
                                          <iframe allow="autoplay"
                                              src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                      </div>
                                  </div>
                                  <div class="blog__info">
                                      <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                              planing for a startup business</a></h3>
                                      <div class="blog__meta">
                                          <span class="posted-on">13.02.2019</span>
                                          <span class="posted-by"><span>By: </span><a
                                                  href="blog-details-image.html">Robert Joe</a></span>
                                      </div>
                                      <div class="blog__desc">
                                          <p>Financial services must tie these three factors together –
                                              customer experience, best practices and
                                              reliability/responsiveness – to have an effective web presence.
                                              They can’t go hard into one particular area and ignore the
                                              others.</p>
                                      </div>
                                      <div class="blog__footer-meta">
                                          <a href="blog-details-image.html" class="read-more-btn">Read
                                              More</a>
                                          <div class="social-share">
                                              <span>Share <i class="fa fa-share-alt"></i></span>
                                              <ul class="social social-shape-square space-5">
                                                  <li class="social__item">
                                                      <a href="https://www.facebook.com"
                                                          class="social__link facebook">
                                                          <i class="fa fa-facebook"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.twitter.com"
                                                          class="social__link twitter">
                                                          <i class="fa fa-twitter"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.plus.google.com"
                                                          class="social__link gplus">
                                                          <i class="fa fa-google-plus"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <div class="col-12 mb--50">
                          <article class="blog format-video">
                              <div class="blog__inner">
                                  <div class="blog__media">
                                      <div class="ratio ratio-16x9">
                                          <iframe class="embed-responsive-item"
                                              src="https://www.youtube.com/embed/uotEuYurJbw?rel=0"
                                              allowfullscreen></iframe>
                                      </div>
                                  </div>
                                  <div class="blog__info">
                                      <h3 class="blog__title"><a href="blog-details-image.html">Finance
                                              planing for a startup business</a></h3>
                                      <div class="blog__meta">
                                          <span class="posted-on">13.02.2019</span>
                                          <span class="posted-by"><span>By: </span><a
                                                  href="blog-details-image.html">Robert Joe</a></span>
                                      </div>
                                      <div class="blog__desc">
                                          <p>Financial services must tie these three factors together –
                                              customer experience, best practices and
                                              reliability/responsiveness – to have an effective web presence.
                                              They can’t go hard into one particular area and ignore the
                                              others.</p>
                                      </div>
                                      <div class="blog__footer-meta">
                                          <a href="blog-details-image.html" class="read-more-btn">Read
                                              More</a>
                                          <div class="social-share">
                                              <span>Share <i class="fa fa-share-alt"></i></span>
                                              <ul class="social social-shape-square space-5">
                                                  <li class="social__item">
                                                      <a href="https://www.facebook.com"
                                                          class="social__link facebook">
                                                          <i class="fa fa-facebook"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.twitter.com"
                                                          class="social__link twitter">
                                                          <i class="fa fa-twitter"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.plus.google.com"
                                                          class="social__link gplus">
                                                          <i class="fa fa-google-plus"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <div class="col-12 mb--50">
                          <article class="blog">
                              <div class="blog__inner">
                                  <div class="blog__media">
                                      <figure class="image">
                                          <img src="assets/img/blog/blog-07.jpg" alt="Blog Image"
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
                                      <div class="blog__desc">
                                          <p>Financial services must tie these three factors together –
                                              customer experience, best practices and
                                              reliability/responsiveness – to have an effective web presence.
                                              They can’t go hard into one particular area and ignore the
                                              others.</p>
                                      </div>
                                      <div class="blog__footer-meta">
                                          <a href="blog-details-image.html" class="read-more-btn">Read
                                              More</a>
                                          <div class="social-share">
                                              <span>Share <i class="fa fa-share-alt"></i></span>
                                              <ul class="social social-shape-square space-5">
                                                  <li class="social__item">
                                                      <a href="https://www.facebook.com"
                                                          class="social__link facebook">
                                                          <i class="fa fa-facebook"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.twitter.com"
                                                          class="social__link twitter">
                                                          <i class="fa fa-twitter"></i>
                                                      </a>
                                                  </li>
                                                  <li class="social__item">
                                                      <a href="https://www.plus.google.com"
                                                          class="social__link gplus">
                                                          <i class="fa fa-google-plus"></i>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 text-center">
                          <ul class="pagination">
                              <li><span class="page-number current">1</span></li>
                              <li><a href="#" class="page-number">2</a></li>
                              <li><a href="#" class="page-number">3</a></li>
                              <li><span class="dot"></span></li>
                              <li><span class="dot"></span></li>
                              <li><span class="dot"></span></li>
                              <li><a href="#" class="page-number">15</a></li>
                              <li><a href="#" class="page-number">16</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="blog-sidebar pl--15 pl-lg--0">
                      <div class="bl-widget author">
                          <div class="inner">
                              <div class="thumb">
                                  <img src="assets/img/others/team-04.jpg" alt="Author Images">
                              </div>
                              <div class="info">
                                  <h5 class="mb--5">Ayo Burion</h5>
                                  <p class="degne">UI/ Web Designer</p>
                                  <p class="mb--25">An Affrotable world wide business service It is</p>
                                  <ul class="social mb--20">
                                      <li class="social__item">
                                          <a href="https://www.facebook.com" class="social__link">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="social__item">
                                          <a href="https://www.twitter.com" class="social__link">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="social__item">
                                          <a href="https://www.plus.google.com" class="social__link">
                                              <i class="fa fa-google-plus"></i>
                                          </a>
                                      </li>
                                  </ul>
                                  <div class="autor-meta">
                                      <span>Articles <strong>84</strong></span>
                                      <span>Comments <strong>490</strong></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="bl-widget post mt--50">
                          <div class="inner">
                              <h5 class="title">Top News</h5>
                              <ul class="post-list">
                                  <li>
                                      <a href="#">Lorem Ipsum is simply dummy text of the printing and
                                          typesetting industry.</a>
                                      <span><i class="fa fa-clock-o"></i> 3 Days Ago</span>
                                  </li>
                                  <li>
                                      <a href="#">There are many variations of passages of Lorem Ipsum
                                          available, </a>
                                      <span><i class="fa fa-clock-o"></i> 8 Days Ago</span>
                                  </li>
                                  <li>
                                      <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                      <span><i class="fa fa-clock-o"></i> 4 Days Ago</span>
                                  </li>
                                  <li>
                                      <a href="#">Sed ut perspiciatis unde omnis iste natus error.</a>
                                      <span><i class="fa fa-clock-o"></i> 6 Days Ago</span>
                                  </li>
                                  <li>
                                      <a href="#">Lorem Ipsum is simply dummy text.</a>
                                      <span><i class="fa fa-clock-o"></i> 5 Days Ago</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="bl-widget quote mt--50">
                          <div class="inner">
                              <div class="post-quote">
                                  <div class="quote-info">
                                      <i class="fa fa-quote-right"></i>
                                      <div class="info">
                                          <h6 class="mb--0">CLEM OJAK</h6>
                                          <span>Designer</span>
                                      </div>
                                  </div>
                                  <p>But I must explain to you how all this mistaken idea of denouncing
                                      pleasure and praising pain was born and I will give you a complete.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
<!-- Main Content Wrapper End -->

@endsection