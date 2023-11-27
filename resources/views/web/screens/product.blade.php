@extends('web.layouts.app')

@section('content')
    <main>

        <!-- Breadcrumb area start -->
        <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
            data-background="{{ asset('assets/img/hero/aboutus-breadcrumbs.jpg') }}"
            style="background-position: bottom;
            background-size: cover;
            background-repeat: no-repeat">
            <div class="container fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb__menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                                    <li class="trail-item trail-end"><span>product details</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>product details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area end -->

        <!-- Product details area start -->
        <div class="bd-product__details-area pt-100 pb-110">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="product__details-thumb-wrapper d-sm-flex align-items-start mr-50">

                            <div class="product__details-thumb-tab-content">
                                <div class="tab-content" id="productthumbcontent">
                                    <div class="tab-pane fade show active" id="img-1" role="tabpanel"
                                        aria-labelledby="img-1-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="{{ asset('public/storage/images/' . $product->image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="img-2" role="tabpanel" aria-labelledby="img-2-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="assets/img/product/quick-view/quick-view-02.png" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="img-3" role="tabpanel" aria-labelledby="img-3-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="assets/img/product/quick-view/quick-view-03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="product__details-content pr-80">
                            <div class="product__details-top d-sm-flex align-items-center mb-5">
                                <div class="product__details-tag mr-10">
                                    <a href="#">naattuMaadu</a>
                                </div>
                            </div>
                            <h3 class="product__details-title">{{ $product->name }}</h3>
                            <div class="product__details-price">
                                <span class="new-price">₹{{ $product->price }}</span>
                            </div>
                            <p>{{ $product->description }}</p>

                            <div class="product__details-action mb-35">
                                {{-- <div class="product__quantity">
                                    <div class="product-quantity-wrapper">
                                        <form action="#">
                                            <button class="cart-minus"><i class="fa-light fa-minus"></i></button>
                                            <input class="cart-input" type="text" value="1">
                                            <button class="cart-plus"><i class="fa-light fa-plus"></i></button>
                                        </form>
                                    </div>
                                </div> --}}
                                <div class="product__add-cart">
                                    <a href="javascript:void(0)" class="bd-fill__btn cart-btn" data-toggle="tooltip"
                                        data-placement="top" title="Quick Shop"
                                        onclick="setProductData({{ $product->toJson() }})" data-bs-toggle="modal"
                                        data-bs-target="#productmodal"><i class="fa-solid fa-basket-shopping"></i> BUY
                                        NOW</a>
                                </div>
                                {{-- <div class="product__add-wish">
                                    <a href="#" class="product__add-wish-btn"><i class="fa-solid fa-heart"></i></a>
                                </div> --}}
                            </div>
                            <div class="product__details-meta mb-20">

                                <div class="categories">
                                    <span>Categories:</span> {{ $product->category->name }}
                                </div>
                                <div class="tag">
                                    <span>Brand:</span> {{ $product->brand->name }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="product__details-additional-info pt-120">
                    <div class="row">
                        {{-- <div class="col-xxl-3 col-xl-4 col-lg-4">
                            <div class="product__details-more-tab mr-15">
                                <nav>
                                    <div class="nav nav-tabs flex-column " id="productmoretab" role="tablist">
                                        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-description" type="button" role="tab"
                                            aria-controls="nav-description" aria-selected="true">Description</button>

                                        <button class="nav-link" id="nav-additional-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-additional" type="button" role="tab"
                                            aria-controls="nav-additional" aria-selected="false">Additional Information
                                        </button>

                                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-review" type="button" role="tab"
                                            aria-controls="nav-review" aria-selected="false">Reviews (2)</button>

                                        <button class="nav-link" id="nav-size-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-size" type="button" role="tab"
                                            aria-controls="nav-size" aria-selected="false">Size Chart</button>
                                    </div>
                                </nav>
                            </div>
                        </div> --}}
                        {{-- <div class="col-xxl-9 col-xl-8 col-lg-8">
                            <div class="product__details-more-tab-content">
                                <div class="tab-content" id="productmorecontent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                        aria-labelledby="nav-description-tab">
                                        <div class="product__details-des">
                                            <p>In marketing a product is an object or system made available for consumer use
                                                it is anything that can be offered to a market to
                                                the desire or need of a retailing, products are often referred to as
                                                merchandise, and in manufacturing, products are bought as
                                                materials and then sold as finished goods. A service regarded to as a type
                                                of product. Commodities are usually raw materials
                                                metals and agricultural products, but a commodity can also be anything wide
                                                the open market. In project management,
                                                the formal definition of the project deliverables</p>
                                            <p>A product can be classified as tangible or intangible. A tangible product is
                                                a physical object that can be perceived by touch
                                                building, vehicle, gadget, An intangible product is a product that can only
                                                be perceived indirectly such as an insurance policy.
                                                can be broadly classified under intangible be durable or non durable. A
                                                product line is "a group of products that are closely
                                                either because they function in a similar manner, are sold to the same
                                                customergroups.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-additional" role="tabpanel"
                                        aria-labelledby="nav-additional-tab">
                                        <div class="product__details-info">
                                            <ul>
                                                <li>
                                                    <h4>Weight</h4>
                                                    <span>2 lbs</span>
                                                </li>
                                                <li>
                                                    <h4>Dimensions</h4>
                                                    <span>12 × 16 × 19 in</span>
                                                </li>
                                                <li>
                                                    <h4>Product</h4>
                                                    <span>Purchase this product on rag-bone.com</span>
                                                </li>
                                                <li>
                                                    <h4>Color</h4>
                                                    <span>Gray, Black</span>
                                                </li>
                                                <li>
                                                    <h4>Size</h4>
                                                    <span>S, M, L, XL</span>
                                                </li>
                                                <li>
                                                    <h4>Model</h4>
                                                    <span>Model </span>
                                                </li>
                                                <li>
                                                    <h4>Shipping</h4>
                                                    <span>Standard shipping: $5,95</span>
                                                </li>
                                                <li>
                                                    <h4>Care Info</h4>
                                                    <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                                </li>
                                                <li>
                                                    <h4>Brand</h4>
                                                    <span>Kazen</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-review" role="tabpanel"
                                        aria-labelledby="nav-review-tab">
                                        <div class="product__details-review">
                                            <h3 class="comments-title">03 reviews for “Wide Cotton Tunic extreme hammer”
                                            </h3>
                                            <div class="latest-comments mb-50">
                                                <ul>
                                                    <li>
                                                        <div class="comments-box d-flex">
                                                            <div class="comments-avatar mr-10">
                                                                <img src="assets/img/product/details/review-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div
                                                                    class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                    <div class="avatar-name">
                                                                        <h5>Siarhei Dzenisenka</h5>
                                                                        <div class="comments-date">
                                                                            <span>March 27, 2018 9:51 am</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-rating">
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fal fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p>This is cardigan is a comfortable warm classic piece.
                                                                    Great to layer with a light top and you can dress up or
                                                                    down given the jewel buttons. I’m 5’8” 128lbs a 34A and
                                                                    the Small fit fine.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comments-box d-flex">
                                                            <div class="comments-avatar mr-10">
                                                                <img src="assets/img/product/details/review-2.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div
                                                                    class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                    <div class="avatar-name">
                                                                        <h5>Siarhei Dzenisenka</h5>
                                                                        <div class="comments-date">
                                                                            <span>March 27, 2018 9:51 am</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-rating">
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p>I bought this beautiful pale gray cashmere sweater for my
                                                                    daughter-in-law for her birthday. She loves it and can
                                                                    wear it with almost anything!</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comments-box d-flex">
                                                            <div class="comments-avatar mr-10">
                                                                <img src="assets/img/product/details/review-3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div
                                                                    class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                    <div class="avatar-name">
                                                                        <h5>Siarhei Dzenisenka</h5>
                                                                        <div class="comments-date">
                                                                            <span>March 27, 2018 9:51 am</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-rating">
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i
                                                                                        class="fal fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p>Amazing club. Sure the secruity is very tight but
                                                                    actually made me and my friends feel secure. You just
                                                                    have to go along with the secruity. Bar staff and
                                                                    cloakroom staff really friendly. Coming out at 7am into
                                                                    bright London sunshine in Smithfields is an amazing
                                                                    London experience</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__details-comment pb-100">
                                                <div class="comment-title mb-20">
                                                    <h3>Add a review</h3>
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                </div>
                                                <div class="comment-rating mb-20">
                                                    <span>Overall ratings</span>
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="comment-input-box">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="col-xxl-12">
                                                                <div class="comment-input">
                                                                    <textarea placeholder="Your review"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="comment-input">
                                                                    <input type="text" placeholder="Your Name*">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="comment-input">
                                                                    <input type="email" placeholder="Your Email*">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="comment-agree d-flex align-items-center mb-25">
                                                                    <input class="z-check-input" type="checkbox"
                                                                        id="z-agree">
                                                                    <label class="z-check-label" for="z-agree">Save my
                                                                        name, email, and website in this browser for the
                                                                        next time I comment.</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="comment-submit">
                                                                    <button type="submit"
                                                                        class="bd-fill__btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-size" role="tabpanel"
                                        aria-labelledby="nav-size-tab">
                                        <div class="product-size-wrapper fix">
                                            <div class="product__details-size-table">
                                                <table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Size (US)</th>
                                                            <th>Chest</th>
                                                            <th>Neck</th>
                                                            <th>Waist</th>
                                                            <th>Arm Length</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>X</td>
                                                            <td>32-34</td>
                                                            <td>13-13.5 </td>
                                                            <td>26-28</td>
                                                            <td>31-32</td>
                                                        </tr>
                                                        <tr>
                                                            <td>S</td>
                                                            <td>35-37</td>
                                                            <td>14-14.5</td>
                                                            <td>29-31</td>
                                                            <td>32-33</td>
                                                        </tr>
                                                        <tr>
                                                            <td>M</td>
                                                            <td>38-40</td>
                                                            <td>15-15.5</td>
                                                            <td>32-34</td>
                                                            <td>33-34</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L</td>
                                                            <td>41-43</td>
                                                            <td>16-16.5</td>
                                                            <td>35-37</td>
                                                            <td>34-35</td>
                                                        </tr>
                                                        <tr>
                                                            <td>XL</td>
                                                            <td>44-46</td>
                                                            <td>17-17.5</td>
                                                            <td>38-40</td>
                                                            <td>35-36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>XXL</td>
                                                            <td>47-49</td>
                                                            <td> 18-18.5</td>
                                                            <td>41-43</td>
                                                            <td>36-37</td>
                                                        </tr>
                                                        <tr>
                                                            <td>XXXL</td>
                                                            <td>50-52</td>
                                                            <td>18-18.5</td>
                                                            <td>44-45</td>
                                                            <td>36-37</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    </div>
                </div>
                <!-- Product details area end -->

                <!-- Related product area start -->
                {{-- <section class="bd-related__product-area p-relative z-index-1 fix grey-bg pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <div class="bd-section__title-wrapper mb-50">
                        <span class="bd-sub__title">Related Product</span>
                        <h2 class="bd-section__title">hand-picked item</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="features__inner p-relative">
                            <div class="product__active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-02.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>pure 500ml milk</h4>
                                                <span class="bd-product__new-price">$45.00</span>
                                                <span class="bd-product__new-price">$35.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-03.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>fresh meat 1kg</h4>
                                                <span class="bd-product__new-price">$32.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-04.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>mikado cheese bar</h4>
                                                <span class="bd-product__new-price">$28.00</span>
                                                <span class="bd-product__old-price">$20.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-05.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>custard oil 500ml</h4>
                                                <span class="bd-product__new-price">$22.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-06.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>fresh meat 1kg</h4>
                                                <span class="bd-product__new-price">$32.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bd-product__item text-center mb-50">
                                            <div class="bd-product__img w-img">
                                                <img src="assets/img/product/product-07.jpg" alt="product-img">
                                            </div>
                                            <div class="bd-product__content">
                                                <h4>custard oil 500ml</h4>
                                                <span class="bd-product__new-price">$24.00</span>
                                            </div>
                                            <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                        class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick Wishlist" data-bs-toggle="modal">
                                                    <i class="fal fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bd-product__navigatin s-2">
                                <button class="product-button-prev"><i class="far fa-long-arrow-left"></i></button>
                                <button class="product-button-next"><i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
                <!-- Related product area end -->

    </main>
    @include('web.layouts.modal')
@endsection

@push('scripts')
    <script>
        var quantity;
        var sizeValue = undefined;

        function setProductData(product) {
            $.ajax({
                type: 'GET',
                url: '/model/' + product.id,
                data: {
                    "_token": "{{ csrf_token() }}", // Include CSRF token
                },
                success: function(response) {
                    console.log(response);
                    updateModalContent(response.productDetails, response.sizePriceArray);
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    console.log(xhr);
                }
            });
        }


        function updateModalContent(productDetails, sizePriceArray) {

            function handleAddToCartClick(e) {
                e.preventDefault();
                console.log("cart added");
                addToCart(productDetails.id, sizeValue, quantity, productDetails.price);
            }

            var productModal = new bootstrap.Modal(document.getElementById('productmodal'));

            document.getElementById('productModalTitle').innerText = productDetails.name;
            document.getElementById('productModalPrice').innerText = '₹' + productDetails.price;
            document.getElementById('productModalImage').src = '{{ asset('public/storage/images/') }}' + '/' +
                productDetails.image;

            var addToCartButton = document.getElementById('addToCartBtn');
            if (addToCartButton) {
                addToCartButton.addEventListener('click', handleAddToCartClick)
            }

            var sizesList = document.getElementById('sizesList');
            var sizeContainer = document.getElementById('sizeContainer');

            sizesList.innerHTML = '';

            for (var size in sizePriceArray) {
                var listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center mb-3';
                listItem.innerHTML = size +
                    '<button class="badge bg-primary cursor-pointer" ' +
                    'style="padding: 10px 14px; font-size: 14px;"' +
                    'onclick="updateTotalPrice(' + sizePriceArray[size] + ', ' + quantity + ')">' +
                    '₹' + sizePriceArray[size] + '</button>';

                sizesList.appendChild(listItem);
            }


            $(".cart-plus").unbind().click(function(e) {
                e.preventDefault();
                var $input = $(this).parent().find("input");
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                updateTotalPrice(productDetails.price, $input.val());
                return false;
            });

            $(".cart-minus").unbind().click(function(e) {
                e.preventDefault();
                var $input = $(this).parent().find("input");
                if (parseInt($input.val()) > 1) {
                    $input.val(parseInt($input.val()) - 1);
                    $input.change();
                    updateTotalPrice(productDetails.price, $input.val());
                }
                return false;
            });

            $(".cart-input").unbind().change(function(e) {
                e.preventDefault();
                quantity = parseFloat($(this).val())
                updateTotalPrice(productDetails.price, $(this).val());
            });

            var productModal = new bootstrap.Modal(document.getElementById('productmodal'));

            // Attach event listener for when the modal is hidden
            productModal._element.addEventListener('hide.bs.modal', function() {
                $("#quantityInput").val(1)
                if (addToCartButton) {
                    addToCartButton.removeEventListener('click', handleAddToCartClick);
                }
            });
        }

        function updateTotalPrice(basePrice, selectedSize) {
            // console.log('val', sizeValue)
            sizeValue = basePrice;
            var totalPrice = quantity ? basePrice * quantity : basePrice;
            console.log('total', totalPrice)
            $("#productModalPrice").text('₹' + totalPrice.toFixed(2));
        }
    </script>
@endpush
