@extends('web.layouts.app')

@section('content')


<main>

    <!-- Breadcrumb area start -->
    {{-- <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
        data-background="assets/img/hero/breadcrumb.jpg">
        <div class="container fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bd-breadcrumb__menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="{{ route('home') }}">Home</a></span>
                                </li>
                                <li class="trail-item trail-end"><span>service</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-breadcrumb__title">
                        <h2>what we do</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Breadcrumb area end -->

    <!-- Service area start -->

    <div class="mt-10">
        <div class="fluid">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-12">
                    <div>
                        <img src="assets/img/new/neii.png" width="600" alt="service-icon">
                    </div>
                </div>

                <div class="col-xl-10 col-md-8 col-sm-12" style="background-color:#f5a64a; min-height: 50vh; z-index: -1; position:relative;">
                    <div style="text-align: left; position: absolute; left: 300px; top: 40px; width: calc(100% - 300px);">
                        <h2 class="text-white" style="font-size: 30px;">NattuMadu Ghee</h2>
                        <hr class="text-white" style="width: 50%;">
                        <h2 class="text-white">$10</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                
                        <div style="margin-top: 30px;">
                            <p class="text-white">CATEGORY: Ghee</p>
                            <p class="text-white">TAGS: Diary</p>
                        </div>
                    </div>
                
                    <div style="width:50%; margin:auto; position:absolute; bottom:-15px; left:20%;">
                        <button class="btn btn-dark" style="padding: 11px; width: 160px; cursor: pointer; pointer-events: auto;">ADD TO CART</button>
                        <button class="btn btn-dark" style="padding: 9px; margin-left: 7px; cursor: pointer; pointer-events: auto;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width:30px;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <section class="bd-serrvice__area service__bg pt-120 pb-90">
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
                            <a href="service-details">
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
                                <span class="bd-service__stroke-text">01</span>
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
                            <a href="service-details">
                                <img src="assets/img/service/service-02.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">dairy products</a></h3>
                            <a class="bd-link__btn-2" href="service-detasils.html">Service Details</a>
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
                                <span class="bd-service__stroke-text">02</span>
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
                            <a href="service-details">
                                <img src="assets/img/service/service-03.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">organic product</a></h3>
                            <a class="bd-link__btn-2" href="service-detasils.html">Service Details</a>
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
                                <span class="bd-service__stroke-text">03</span>
                                <h3><a href="service-details.html">organic product</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details">
                                <img src="assets/img/service/service-04.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">organic product</a></h3>
                            <a class="bd-link__btn-2" href="service-detasils.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/4.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/4.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-service__stroke-text">04</span>
                                <h3><a href="service-details.html">organic product</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details">
                                <img src="assets/img/service/service-05.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">organic product</a></h3>
                            <a class="bd-link__btn-2" href="service-detasils.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/5.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/5.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-service__stroke-text">05</span>
                                <h3><a href="service-details.html">organic product</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="bd-service__item-2 mb-30">
                        <div class="bd-service__thumb-2 w-img">
                            <a href="service-details">
                                <img src="assets/img/service/service-06.jpg" alt="service-thumb">
                            </a>
                        </div>
                        <div class="bd-service__content-2 transition-3">
                            <h3><a href="service-detasils.html">organic product</a></h3>
                            <a class="bd-link__btn-2" href="service-detasils.html">Service Details</a>
                            <div class="bd-service__icon">
                                <span>
                                    <img src="assets/img/service/icon/6.png" alt="service-icon">
                                </span>
                            </div>
                        </div>
                        <div class="bd-service__hover transition-3">
                            <div class="bd-service__overlay">
                                <div class="bd-service__icon">
                                    <span>
                                        <img src="assets/img/service/icon/6.png" alt="service-icon">
                                    </span>
                                </div>
                                <span class="bd-service__stroke-text">06</span>
                                <h3><a href="service-details.html">organic product</a></h3>
                                <p>A content farm is a company that employs to large numbers quality.</p>
                                <a class="bd-link__btn-2" href="service-details.html">Service Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- Cta area start -->
    <section class="bd-cta__area p-relative z-index-11 pt-120 pb-60" data-background="assets/img/bg/cta-bg.jpg">
        <div class="bd-cta__shape">
            <img src="assets/img/cta/shap-01.png" alt="cta-shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="bd-section__title-wrapper mb-50">
                        <span class="bd-sub__title">Custom Request</span>
                        <h2 class="bd-section__title style-2">Book an appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bd-cta__left-wrapper mb-60">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">full name</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="e.g. jhon william">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">email address</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="info@webmail.com">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">phone number</h5>
                                        <div class="bd-cta__input">
                                            <input type="text" placeholder="000 111 222 55">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-cta__input-item mb-30">
                                        <h5 class="bd-cta__input-title">date & time</h5>
                                        <div class="bd-cta__input">
                                            <input type="date">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="bd-cta__btn mt-10">
                            <a class="bd-theme__btn-2" href="contact.html">get appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bd-contact__support mb-60">
                        <div class="bd-contact__action">
                            <div class="bd-contact__icon">
                                <img src="assets/img/cta/phone-icon.png" alt="phone-icon">
                            </div>
                            <div class="bd-contact__action-text">
                                <span>Or Call Us Now</span>
                                <h3><a href="tel:00211232000">00 211 232 000</a></h3>
                            </div>
                        </div>
                        <p class="bd-cta__paragraph">Give us a call to ask for online advice or book
                            a physical schedule at dairypress soon.</p>
                        <div class="bd-cta__map">
                            <div class="bd-cta__map-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="bd-cta__map-title">
                                <span><a target="_blank"
                                        href="https://www.google.com/maps/@23.8115801,90.4645993,11.38z?hl=en">view on
                                        google map</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta area end -->

    <!-- News area start -->
    <section class="bd-news__area pt-120 pb-65">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-md-8">
                    <div class="bd-section__title-wrapper mb-50">
                        <span class="bd-sub__title">News Feeds</span>
                        <h2 class="bd-section__title">blog & insights</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="news__btn text-md-end mb-50">
                        <a class="bd-theme__btn-4" href="news-details.html">more news</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-news__item mb-30">
                        <div class="bd-news__thumb-2 w-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/01.jpg" alt="news-thumb">
                            </a>
                        </div>
                        <div class="bd-news__content-2">
                            <span class="bd-news__sub-title">Farm, Meat</span>
                            <h3 class="bd-news__title-2">
                                <a href="#">to influence consumer <br>
                                    behavior, also used</a>
                            </h3>
                            <div class="bd-news__border">
                                <div class="bd-news__meta">
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                                    </div>
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-user"></i>David Askerph</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-news__item mb-30">
                        <div class="bd-news__thumb-2 w-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/02.jpg" alt="news-thumb">
                            </a>
                        </div>
                        <div class="bd-news__content-2">
                            <span class="bd-news__sub-title">Farm, Meat</span>
                            <h3 class="bd-news__title-2">
                                <a href="#">Farmers tend enterprise <br>
                                    individual</a>
                            </h3>
                            <div class="bd-news__border">
                                <div class="bd-news__meta">
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                                    </div>
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-user"></i>Anzila Yatrian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-news__item mb-30">
                        <div class="bd-news__thumb-2 w-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/03.jpg" alt="news-thumb">
                            </a>
                        </div>
                        <div class="bd-news__content-2">
                            <span class="bd-news__sub-title">Farm, Meat</span>
                            <h3 class="bd-news__title-2">
                                <a href="#">which means that they <br>
                                    are usually quite</a>
                            </h3>
                            <div class="bd-news__border">
                                <div class="bd-news__meta">
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                                    </div>
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-user"></i>Kelian Anderson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-news__item mb-30">
                        <div class="bd-news__thumb-2 w-img">
                            <a href="news-details.html">
                                <img src="assets/img/news/04.jpg" alt="news-thumb">
                            </a>
                        </div>
                        <div class="bd-news__content-2">
                            <span class="bd-news__sub-title">Farm, Meat</span>
                            <h3 class="bd-news__title-2">
                                <a href="#">natural leaders who & <br>
                                    thrive at influencing</a>
                            </h3>
                            <div class="bd-news__border">
                                <div class="bd-news__meta">
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                                    </div>
                                    <div class="bd-news__meta-item">
                                        <span><i class="fa-solid fa-user"></i>Peter Anderson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News area end -->

</main>

@endsection