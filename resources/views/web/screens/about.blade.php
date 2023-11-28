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
                                <h2 class="bd-section__title mb-25">Taste and tradition</h2>
                                <p class="bd-section__paragraph">In the tapestry of our existence, we are more than two
                                    decades deep into the artistry of sales and marketing. Our journey intertwines
                                    seamlessly with a four-decade-old saga, a milk-procuring company rooted in the
                                    heartlands of Tamil Nadu. We are orchestrators of a daily symphony, drawing forth 40,000
                                    liters of milk from the diverse tapestry of cow breeds, nurturing bonds with 2000
                                    dedicated farmers.
                                    <br><br> Our vast web encompasses over 300 milk collection centers, four
                                    serene milk chilling sanctuaries, and a single epic factory. Yet, amid this crescendo of
                                    abundance, we discovered a gentle whisper of rarity. The Indigenous cow, with its
                                    graceful presence diminishing, posed an intricate challenge. The elixir of its milk was
                                    but a droplet, a mere 600 liters, and the path to market its pure essence was steeped in
                                    obscurity. <br><br>
                                    We are custodians of hope, nurturing a sanctuary dedicated solely to Indigenous cow
                                    milk. With just 600 precious liters, we awaken discerning palates, and each day, our
                                    sanctuary grows stronger. <br><br>
                                    In this, we glimpse the future – a future where our journey in desi cow milk stands
                                    unwavering, reaching new heights in the premium segment. Welcome to our tale, where
                                    tradition and innovation weave together, abundance and scarcity dance in harmony, and
                                    the past and future unite.
                                </p>

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
