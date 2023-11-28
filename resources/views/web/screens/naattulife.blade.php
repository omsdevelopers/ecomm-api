@extends('web.layouts.app')

@section('content')
    <main>

        <!-- Breadcrumb area start -->
        <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
            data-background="assets/img/new/Background.jpg">
            <div class="container fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb__menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                                    <li class="trail-item trail-end"><span>NaattuLife</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>NaattuLife</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area end -->

        <!-- Founder info area start  -->
        <section class="bd-trem__founder pt-120 pb-40">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-7">
                        <div class="bd-team__founder-main mb-60 ">
                            <div class="bd-section__title-wrapper mb-35">
                                <span class="bd-sub__title mb-5">what we provide</span>
                                <h2 class="bd-section__title mb-25">GHEE</h2>
                                <p class="paragraph-2">Beneath the Indian sun, milk from sacred indigenous cows is gently
                                    heated, coaxing cream to separate and fill aged cans. A touch of curd from
                                    native cow's milk joins the mix. Sunlight bathes the cream, and room
                                    temperature nurtures it to sourness. Chilled storage at 4°C follows. After a
                                    day's embrace, the cream is transformed into butter. In a copper-bottomed pot
                                    over firewood, under the sun's direct gaze, the butter sizzles and dances,
                                    revealing the ancient alchemy of ghee-making—a symphony of tradition and
                                    nature, a partnership with the sun, creating liquid gold.</p>
                            </div>
                            <div class="bd-team__founder-btn">
                                <a class="bd-hero__btn-4" href="{{ route('contact') }}">Get In Touch<i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="bd-team__founder-thumb w-img mb-60">
                            <img src="https://twobrothersindiashop.com/cdn/shop/articles/Untitled_design_3.png?v=1682432998&width=1300"
                                alt="founder-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Founder info area end  -->

        <!-- Section-border -->
        <div class="container small-container">
            <div class="hr-1"></div>
        </div>
        <!-- Section-border -->


        <section class="bd-trem__founder pt-120 pb-40">
            <div class="container">
                <div class="row align-items-center ">

                    <div class="col-lg-5">
                        <div class="bd-team__founder-thumb w-img mb-60 container">
                            <img src="assets/img/about/aboutus-ghee.jpg" alt="founder-thumb">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bd-team__founder-main mb-60 ">
                            <div class="bd-section__title-wrapper mb-35">
                                <span class="bd-sub__title mb-5">NAATTUMAADU</span>
                                <h2 class="bd-section__title mb-25"> A2 Ghee Benefits & Nutrition Facts 
                                </h2>
                                <p class="paragraph-2">
                                    A2 Cow Ghee has essential macro and micronutrients that fulfill the daily dietary
                                    requirements of the body. It is a rich source of antioxidants and vital vitamins like
                                    Vit B2, B12, B6, C, E, and K, Omega-3 and Omega-6 fatty acids, and healthy amino acids.
                                </p>
                            </div>

                            <ul class="bd-list mb-30">
                                <li>Nourishes the body</li>
                                <li>Enhances digestion & absorption</li>
                                <li>Increases immunity (ojas)</li>
                                <li>Good for the heart</li>
                                <li>Improves brain function</li>
                                <li>Bone health</li>
                                <li>Vital nutrition for kids</li>
                                <li>Heals & moisturizes the skin</li>
                                <li>Healthy substitute for cooking oil</li>
                            </ul>

                            <div class="bd-section__title-wrapper mb-35">
                                <p class="paragraph-2">
                                    In addition to A2 Cow Ghee, we also offer the following products:
                                </p>
                            </div>

                            <ul class="bd-list mb-30">
                                <li>Butter</li>
                                <li>Fertilizers</li>
                                <li>Cow Dung</li>
                                <li>Pooja Products – Vibuthi, Doop sticks, etc.</li>
                            </ul>

                            <div class="bd-team__founder-btn">
                                <a class="bd-hero__btn-4" href="{{ route('contact') }}">Get In Touch<i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Skill-area-start -->
        {{-- <section>
            <div class="bd-skill__area pt-100 pb-40">
                <div class="container small-container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="bd-skill__progress">
                                <div class="bd__skill-title mb-40">
                                    <h3>Personal Skills</h3>
                                </div>
                                <div class="bd-progress__skill-item fix">
                                    <h4>Product Design</h4>
                                    <span class="progress-count">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                            data-wow-delay=".3s" role="progressbar" data-width="70%" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: 79%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-progress__skill-item fix">
                                    <h4>Design Development Support</h4>
                                    <span class="progress-count">52%</span>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                            data-wow-delay=".3s" role="progressbar" data-width="52%" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: 52%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-progress__skill-item fix">
                                    <h4>User Experience & Research</h4>
                                    <span class="progress-count">82%</span>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-duration="1s"
                                            data-wow-delay=".3s" role="progressbar" data-width="82%" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: 82%; visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: slideInLeft;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="bd-skill__thumb w-img mb-60">
                                <img src="assets/img/team/details/02.jpg" alt="skill-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Skill-area-end -->

        <!-- Section-border -->
        <div class="container">
            <div class="hr-1"></div>
        </div>
        <!-- Section-border -->

      

    </main>
@endsection
