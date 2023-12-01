@extends('web.layouts.app')

@section('content')
    <main>

        <!-- Breadcrumb area start -->
        <div class="bd-breadcrumb__area hero__overlay Breadcrumb__height d-flex align-items-center"
            data-background="assets/img/hero/bread.png" style="background-position: bottom;
    background-repeat: no-repeat">
            <div class="container fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb__menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><span><a href="{{ route('home') }}">Home</a></span>
                                    </li>
                                    <li class="trail-item trail-end"><span>Quill & Platter</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>Quill & Platter</h2>
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
                                <span><a href="tel:6364650068">+91 63 64 65 00 68</a></span>
                                <span><a href="tel:8098866888"> +91 809 88 66 888</a></span>
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
                                <span><a href="mailto:naattulife@gmail.com">naattulife@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 ">
                        <div class="bd-conatact__info text-center mb-30">
                            <div class="bd-conatact__info-icon">
                                <img src="assets/img/icon/contact/03.png" alt="conatact-icon">
                            </div>
                            <div class="bd-conatact__info-content">
                                <h3>office address</h3>
                                <span>Naattu The Native Food company Private Limited
                                    53,Nehru Colony
                                    Mahalingapuram
                                    Pollachi
                                    <br> Coimbatore
                                    Tamilnadu -642109</span>
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
                                <span><a href="https://www.skype.com">skype.com</a></span>
                                <span><a href="https://www.linkdin.com">linkdin.com</a></span>
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
                                        src="https://www.google.com/maps/d/embed?mid=1FNUq6LcTk8z41dKq4c0SYmH1Dgw&hl=en&ehbc=2E312F"
                                        width="640" height="480"></iframe>
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

                                                <button class="bd-theme__btn-2 mt-10" type="submit">Submit</button>
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
