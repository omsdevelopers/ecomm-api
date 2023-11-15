@extends('web.layouts.app')

@section('content')

<main>

    <!-- Breadcrumb area start -->
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
                                <li class="trail-item trail-end"><span>contact</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-breadcrumb__title">
                        <h2>get in touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <!-- Contact info area start -->
    <section class="bd-contact__info-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-conatact__info text-center mb-30">
                        <div class="bd-conatact__info-icon">
                            <img src="assets/img/icon/contact/01.png" alt="conatact-icon">
                        </div>
                        <div class="bd-conatact__info-content">
                            <h3>Call Us Here</h3>
                            <span><a href="tel:+09089098987-0">(098) 897 890 90</a></span>
                            <span><a href="tel:+09089098987-00">+090 8909 89 87-0</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-conatact__info text-center mb-30">
                        <div class="bd-conatact__info-icon">
                            <img src="assets/img/icon/contact/02.png" alt="conatact-icon">
                        </div>
                        <div class="bd-conatact__info-content">
                            <h3>email address</h3>
                            <span><a href="mailto:info@webexample.com">info@webexample.com</a></span>
                            <span><a href="mailto:jobs@query-design.com">jobs@query-design.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-conatact__info text-center mb-30">
                        <div class="bd-conatact__info-icon">
                            <img src="assets/img/icon/contact/03.png" alt="conatact-icon">
                        </div>
                        <div class="bd-conatact__info-content">
                            <h3>office address</h3>
                            <span>14/A, New Humble Town, <br> NYC, USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-conatact__info text-center mb-30">
                        <div class="bd-conatact__info-icon">
                            <img src="assets/img/icon/contact/04.png" alt="conatact-icon">
                        </div>
                        <div class="bd-conatact__info-content">
                            <h3>social connect</h3>
                            <span><a href="https://www.skype.com">skype.com/humble.cc</a></span>
                            <span><a href="https://www.linkdin.com">linkdin.com/hamble.007</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact info area end -->

    <!-- Contact area end -->
    <section class="bd-contact__area pb-120">
        <div class="container">
            <div class="row">
                <div class="bd-contact__main">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="bd-google__map mb-60">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.13673771221!2d90.41932575!3d23.780636450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1659245455959!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="bd-contact__wrapper mb-30">
                                <div class="bd-section__title-wrapper mb-50">
                                    <span class="bd-sub__title">Get Quoate</span>
                                    <h2 class="bd-section__title mb-30">make request</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="#">
                                            <div class="bd-contact__input mb-15">
                                                <input type="text" placeholder="Enter name">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="bd-contact__input mb-15">
                                                <input type="text" placeholder="Email address">
                                                <i class="fa-solid fa-envelope-open"></i>
                                            </div>
                                            <div class="bd-contact__input">
                                                <textarea placeholder="Message"></textarea>
                                                <i class="fa-solid fa-pen"></i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area end -->

</main>

@endsection