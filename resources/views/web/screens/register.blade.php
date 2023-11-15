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
                                <li class="trail-item trail-begin"><span><a href="{{ route('home') }}">Home</a></span></li>
                                <li class="trail-item trail-end"><span>register</span></li>
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

    <!-- Register area start  -->
    <div class="bd-register__area pt-115 pb-130">
        <div class="container small-container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="signup-form-wrapper">
                        <div class="bd-postbox__contact">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bd-login__input">
                                            <input type="text" placeholder="First Name">
                                            <i class="fa-solid fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bd-login__input">
                                            <input type="text" placeholder="Last Name">
                                            <i class="fa-solid fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="bd-login__input">
                                            <input type="email" placeholder="Your Email">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="bd-login__input">
                                            <input type="text" placeholder="Username">
                                            <i class="fa-solid fa-file-signature"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="bd-login__input">
                                            <input type="text" placeholder="Password">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                    </div>
                                    <div class="signup-action">
                                        <div class="signup-action-check">
                                            <input class="e-check-input" type="checkbox" id="sing-up">
                                            <label class="sign-check" for="sing-up"><span>Accept the terms and <a
                                                        href="#">Privacy
                                                        Policy</a></span></label>
                                        </div>
                                    </div>
                                    <div class="bd-sigin__action-button mb-20">
                                        <button class="bd-login__btn w-100">Register now</button>
                                    </div>
                                    <div class="bd-resister__bottom-text text-center">
                                        <div class="bd-acount__login-text">
                                            <span>Already have an account? <a href="{{ route('login') }}">Log in</a></span>
                                        </div>
                                        <div class="bd-sign__social-text">
                                            <span>Or Sign- in with</span>
                                        </div>
                                        <div class="bd-sign__social-icon">
                                            <a href="https://www.facebook.com">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a href="https://www.gmail.com">
                                                <i class="fa-solid fa-envelope-open"></i>
                                                <span>Google</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register area end  -->

</main>

@endsection