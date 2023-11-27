@extends('web.layouts.app')

@section('content')

<main>

    <!-- Breadcrumb area start -->
    <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
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
                                <li class="trail-item trail-end"><span>login</span></li>
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
    <!-- Breadcrumb area end-->

    <!-- Login area start  -->
    <div class="bd-login__area pt-120 pb-120">
        <div class="container small-container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="Login-form-wrapper">
                        <div class="bd-postbox__contact">
                            <form action="{{ route('login_post') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="bd-login__input">
                                            <input type="email" name="email" placeholder="Enter Email">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="bd-login__input">
                                            <input type="password" name="password" placeholder="Password">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                    </div>
                                    <div class="signup-action">
                                        <div class="signup-action-check">
                                            <input class="e-check-input" type="checkbox" id="sing-up" name="remember">
                                            <label class="sign-check" for="sing-up"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <div class="bd-sigin__action-button mb-20">
                                        <button class="bd-login__btn w-100" type="submit">Login now</button>
                                    </div>
                                    <div class="bd-registered__wrapper">
                                        <div class="not-register">
                                            <span>Not registered?</span><span><a href="{{ route('register') }}"> Sign
                                                    up</a></span>
                                        </div>
                                        {{-- <div class="forget-password">
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </div> --}}
                                    </div>
                                    <div class="bd-resister__bottom-text text-center">
                                        <div class="bd-sign__social-text">
                                            <span>Or Sign in with</span>
                                        </div>
                                        <div class="bd-sign__social-icon">
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a href="#">
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
    <!-- Login area end  -->

</main>

@endsection