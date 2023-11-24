@extends('web.layouts.app')

@section('content')
    <main>
        <!-- breadcrumb area start -->
        <div class="bd-breadcrumb__area hero__overlay Breadcrumb__height d-flex align-items-center"
            data-background="assets/img/hero/aboutus-breadcrumbs.jpg"
            style="background-position: bottom;
        background-size: cover;
        background-repeat: no-repeat">
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
                            <img src="assets/img/about/aboutus-ghee.jpg" alt="about-thumb">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bd-about__content-box-3 mb-60">
                            <div class="bd-section__title-wrapper mb-40">
                                <span class="bd-sub__title">About Us</span>
                                <h2 class="bd-section__title mb-25">Have More Than 20+ Years</h2>
                                <p class="bd-section__paragraph">Nevertheless, akin to various agricultural ventures, NaattuMaadu Dairy Production Company encompasses a diverse spectrum of sizes. The most expansive dairy farms under our purview boast over 15,000 cows, while those with 1,000–5,000 cows are more prevalent. Ensure the formal registration of your dairy business with the relevant authorities.</p>
                            </div>
                            {{-- <div class="bd-author__border">
                                <div class="bd-about__author">
                                    <img src="assets/img/about/3/author.png" alt="author">
                                    <div class="bd-about__author-text">
                                        <span>Head Of Idea</span>
                                        <h3><a href="team.html">Alonso D. Dowson</a></h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end -->


    </main>
@endsection
