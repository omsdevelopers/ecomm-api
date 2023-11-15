@extends('web.layouts.app')

@section('content')

<main>
    <!-- breadcrumb area start -->
    <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
        data-background="assets/img/hero/breadcrumb.jpg">
        <div class="container fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bd-breadcrumb__menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="{{ route('home') }}">Home</a></span>
                                </li>
                                <li class="trail-item trail-end"><span>About</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-breadcrumb__title">
                        <h2>about us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- About area start -->
    <section class="bd-about__area pt-120 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bd-about__thumb w-img mb-60">
                        <img src="assets/img/about/about-thumb-01.jpg" alt="about-thumb">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-about__content-box-3 mb-60">
                        <div class="bd-section__title-wrapper mb-40">
                            <span class="bd-sub__title">About Us</span>
                            <h2 class="bd-section__title mb-25">Have More Than 20+ Years</h2>
                            <p class="bd-section__paragraph">However, like much of agriculture, dairy farms come in a
                                wide
                                range of sizes. The largest U.S. dairy farms have over 15,000
                                cows, though farms with 1,000–5,000 cows are more common.
                                Register your dairy business with respective authorities.</p>
                        </div>
                        <div class="bd-author__border">
                            <div class="bd-about__author">
                                <img src="assets/img/about/3/author.png" alt="author">
                                <div class="bd-about__author-text">
                                    <span>Head Of Idea</span>
                                    <h3><a href="team.html">Alonso D. Dowson</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end -->

    <!-- Service area start -->
    <section class="bd-serrvice__area service__bg pt-120 pb-90" data-background="assets/img/bg/service-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bd-section__title-wrapper text-center mb-50">
                        <span class="bd-sub__title">Services</span>
                        <h2 class="bd-section__title">what we provide</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details.html">
                                <img src="assets/img/service/service-01.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">fresh milk & meat</a></h3>
                            <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/1.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/1.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-servicr__stroke-text">01</span>
                                <h3><a href="service-details.html">fresh milk & meat</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details.html">
                                <img src="assets/img/service/service-02.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">dairy products</a></h3>
                            <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/2.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/2.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-servicr__stroke-text">02</span>
                                <h3><a href="service-details.html">dairy products</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details.html">
                                <img src="assets/img/service/service-03.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">organic product</a></h3>
                            <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/3.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/3.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-servicr__stroke-text">03</span>
                                <h3><a href="service-details.html">organic product</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service__btn text-center mt-20 mb-30">
                    <a class="bd-theme__btn-4" href="shop.html">more proudcts</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- Timeline area start -->
    <section class="bd-timeline__area pb-125">
        <div class="container">
            <div class="row align-items-center">
                <div class="bd-section__title-wrapper text-center mb-50">
                    <span class="bd-sub__title">History</span>
                    <h2 class="bd-section__title">our journey</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="bd-timeline__wrapper">
                        <div class="bd-timeline__start">
                            <span><i class="fa-solid fa-plus"></i></span>
                        </div>
                        <div class="bd-timeline__continue">
                            <div class="row timeline__right mb-20">
                                <div class="col-md-6">
                                    <div class="bd__timeline-year p-relative mb-60">
                                        <div class="bd-timeline__date">
                                            <h2>1956</h2>
                                            <div class="bd-timeline__icon">
                                                <span><img src="assets/img/timeline/icon-01.png"
                                                        alt="timeline-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-timeline__box mb-60">
                                        <div class="bd-timeline__inner">
                                            <div class="bd-timeline___thumb">
                                                <img src="assets/img/timeline/timeline-01.png" alt="">
                                            </div>
                                            <div class="bd-timeline__content">
                                                <h3>journey was started</h3>
                                                <p>Holstein Friesian cows now dominate the global dairy industry. The
                                                    Holstein Friesian has the highest milk production of all in 1 breeds
                                                    worldwide.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center timeline__left mb-20">
                                <div class="col-md-6">
                                    <div class="bd-timeline__box mb-60">
                                        <div class="bd-timeline__inner">
                                            <div class="bd-timeline___thumb">
                                                <img src="assets/img/timeline/timeline-02.png" alt="">
                                            </div>
                                            <div class="bd-timeline__content">
                                                <h3>1st rewards got</h3>
                                                <p>Holstein Friesian cows now dominate the global dairy industry. The
                                                    Holstein Friesian has the highest milk production of all in 1 breeds
                                                    worldwide.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd__timeline-year year-2 p-relative">
                                        <div class="bd-timeline__date">
                                            <h2>2000</h2>
                                            <div class="bd-timeline__icon">
                                                <span><img src="assets/img/timeline/icon-02.png" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline__right mb-20">
                                <div class="col-md-6">
                                    <div class="bd__timeline-year p-relative mb-60">
                                        <div class="bd-timeline__date">
                                            <h2>2012</h2>
                                            <div class="bd-timeline__icon">
                                                <span><img src="assets/img/timeline/icon-03.png" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-timeline__box mb-60">
                                        <div class="bd-timeline__inner">
                                            <div class="bd-timeline___thumb">
                                                <img src="assets/img/timeline/timeline-03.png" alt="">
                                            </div>
                                            <div class="bd-timeline__content">
                                                <h3>best agency in nyc</h3>
                                                <p>Holstein Friesian cows now dominate the global dairy industry. The
                                                    Holstein Friesian has the highest milk production of all in 1 breeds
                                                    worldwide.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center timeline__left mb-20">
                                <div class="col-md-6">
                                    <div class="bd-timeline__box mb-60">
                                        <div class="bd-timeline__inner">
                                            <div class="bd-timeline___thumb">
                                                <img src="assets/img/timeline/timeline-04.png" alt="">
                                            </div>
                                            <div class="bd-timeline__content">
                                                <h3>design in new york</h3>
                                                <p>Holstein Friesian cows now dominate the global dairy industry. The
                                                    Holstein Friesian has the highest milk production of all in 1 breeds
                                                    worldwide.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd__timeline-year p-relative year-3">
                                        <div class="bd-timeline__date">
                                            <h2>2018</h2>
                                            <div class="bd-timeline__icon">
                                                <span><img src="assets/img/timeline/icon-04.png" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row timeline__right">
                                <div class="col-md-6">
                                    <div class="bd__timeline-year p-relative mb-60">
                                        <div class="bd-timeline__date">
                                            <h2>2022</h2>
                                            <div class="bd-timeline__icon">
                                                <span><img src="assets/img/timeline/icon-05.png" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-timeline__box">
                                        <div class="bd-timeline__inner">
                                            <div class="bd-timeline___thumb">
                                                <img src="assets/img/timeline/timeline-05.png" alt="">
                                            </div>
                                            <div class="bd-timeline__content">
                                                <h3>design reward 2022</h3>
                                                <p>Holstein Friesian cows now dominate the global dairy industry. The
                                                    Holstein Friesian has the highest milk production of all in 1 breeds
                                                    worldwide.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-timeline__start">
                            <span><i class="fa-solid fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Timeline area end -->

</main>

@endsection