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
                                    <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                                    <li class="trail-item trail-end"><span>A visual ode</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>A visual ode</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area start -->

        <!-- Gallery info area start  -->
        <div class="bd-trem__gallery pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="bd-gallery__button p-relative mb-40">
                        <button class="active" data-filter="*">all overview</button>
                        {{-- <button data-filter=".c-1" class="">A2-DESI GHEE</button> --}}
                        {{-- <button data-filter=".c-2" class="">soil field</button>
                        <button data-filter=".c-3" class="">grass field</button>
                        <button data-filter=".c-4" class="">grass field</button>
                        <button data-filter=".c-5" class="">organic food</button> --}}
                    </div>
                </div>

                <div class="row grid gallery-grid-items">
                    @foreach ($galleries as $gallery)
                        <div
                            class="col-xl-4 col-lg-4 col-md-6 grid-item c-{{ $gallery->category }} {{ $gallery->status == 1 ? 'c-inactive' : 'c-active' }}">
                            <div class="bd-singel__gallery-item mb-30">
                                <div class="bd-gallery__thumb">
                                    <a href="#">
                                        <img src="{{ asset('public/images/' . $gallery->image) }}"
                                            alt="{{ $gallery->name }}-thumb">
                                    </a>
                                </div>
                                <span class="bd-gallery__action">
                                    <a class="popup-image" href="{{ asset('public/images/' . $gallery->image) }}">
                                        <i class="fa-regular fa-face-cowboy-hat"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Gallery info area end  -->

    </main>
@endsection
