<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>
<!-- Preloader end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix mb-40"></div>
                <div class="sidebar__thumb d-none d-lg-block mb-20">
                    <div class="row gx-2">
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/06.jpg">
                                    <img src="assets/img/gallery/thumb/06.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/07.jpg">
                                    <img src="assets/img/gallery/thumb/07.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/08.jpg">
                                    <img src="assets/img/gallery/thumb/08.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/09.jpg">
                                    <img src="assets/img/gallery/thumb/09.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/10.jpg">
                                    <img src="assets/img/gallery/thumb/10.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sidebar__single-thumb w-img mb-10">
                                <a class="popup-image" href="assets/img/gallery/thumb/01.jpg">
                                    <img src="assets/img/gallery/thumb/01.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas__contact mt-30 mb-20">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                    Mirnada City Tower, NYC</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+088889797697">+088889797697</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+012-345-6789"><span
                                        class="mailto:support@mail.com">support@mail.com</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas__social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<div class="offcanvas-overlay-white"></div>
<!-- Offcanvas area start -->

@include('web.layouts.cart-sidebar')


<!-- Added to cart message  -->
<div class="added-to-cart">
    <div class="added-to-cart-content d-flex align-items-center">
        <i class="fa-light fa-check"></i>
        <p>Successfully Added to cart</p>
        <span class="bd-action__item-number cart-count">0</span>
    </div>
</div>

<!-- Added to wishlist message -->
<div class="added-to-wishlist">
    <div class="added-to-cart-content d-flex align-items-center">
        <i class="fa-light fa-check"></i>
        <p>Successfully Added to wishlist</p>
        <span class="bd-action__item-number wishlist-count">0</span>
    </div>
</div>


<!-- Header area start -->
<header>
    <!-- Header top area start -->
    <div class="bd-header__top-area pg-bg d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-9 col-8">
                    <div class="bd-header__contact-spacing">
                        <div class="bd-header__contact">
                            <ul>
                                <li><a href="mailto:info@webmail.com"><i
                                            class="fa-solid fa-envelope-open"></i>info@webmail.com</a></li>
                                <li><a href="tel:89789790899"><i class="fa-solid fa-phone"></i>897 897 908 99</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4  col-md-3 col-4">
                    <div class="bd-header__social text-end">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance-square"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end -->
    <div id="header-sticky" class="bd-header__area">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-4 p-0">
                    <div class="bd-header__logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-4 d-none d-md-block">
                    <div class="bd-header__menu-wrapper d-flex justify-content-center">
                        <div class="main-menu d-none d-none d-lg-block">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href={{ route('home') }}>Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>

                                    <li>

                                        @if (auth('web')->check())
                                            <div class="dropdown">
                                                <button class="navbar-tool ml-3"
                                                    onclick="toggleDropdown()">{{ 'hello' }},
                                                    {{ auth('web')->user()->name }}
                                                    <span style="margin-left: 5px;">▼</span>

                                                </button>


                                                <div id="dropdown-menu"
                                                    style="display: none; position: absolute; top: 100%; left: 0; z-index: 1000; min-width: 200px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border: 1px solid #ccc; background-color: #fff; border-radius: 8px; overflow: hidden;">
                                                    <!-- Dropdown content goes here -->
                                                    <a style="display: block; padding: 15px; color: #333; text-decoration: none; transition: background-color 0.3s; border-bottom: 1px solid #eee;"
                                                        href="#">{{ __('my order') }}</a>
                                                    <a style="display: block; padding: 15px; color: #333; text-decoration: none; transition: background-color 0.3s; border-bottom: 1px solid #eee;"
                                                        href="#">{{ __('my profile') }}</a>
                                                    <div
                                                        style="height: 1px; margin: 8px 0; overflow: hidden; background-color: #eee;">
                                                    </div>
                                                    <form method="POST" action="{{ route('logout') }}"
                                                        style="display: inline;">
                                                        @csrf
                                                        <button type="submit"
                                                            style="padding: 15px; color: #e74c3c; text-decoration: none; transition: background-color 0.3s; border: none; background: none; cursor: pointer;">{{ __('Logout') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                    @endif
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-1 col-md-4 col-8">
                    <div class="bd-header__right d-flex align-items-center justify-content-end">
                        <div class="bd-header__action">
                            <div class="bd-header__action-icon" onclick="cart()">
                                <button class="shoping__toggle">
                                    <img src="{{ asset('assets/img/icon/cart-icon.png') }}" alt="cart-icon">
                                </button>
                            </div>
                        </div>
                        <div class="bd-header__hamburger">
                            <div class="bd-header__hamburger-icon">
                                <button class="side-toggle">
                                    <img src="{{ asset('assets/img/icon/hamburger-icon.png') }}" alt="hamburger-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        console.log('Script executed');

        window.toggleDropdown = function() {
            var dropdown = document.getElementById("dropdown-menu");
            console.log('hi')
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }

        // Close the dropdown when clicking outside
        document.addEventListener("click", function(event) {
            var dropdown = document.getElementById("dropdown-menu");
            var button = document.querySelector(".navbar-tool");
            if (event.target !== button && event.target !== dropdown) {
                dropdown.style.display = "none";
            }
        });

        function cart() {
            $.ajax({
                type: 'GET',
                url: '/cart/',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    updateCartContent(response.cartItem);
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    console.log(xhr);
                }
            });
        }

        function updateCartContent(cartItem) {
            console.log(cartItem)
            // $("#cartTitle").text(cartItem[0].name);
            var cartMiniInner = $('.cartmini__inner ul');
            cartMiniInner.empty(); // Clear existing items

            if (!cartItem.length > 0) {
                cartMiniInner.empty(); // Clear existing items
                updateTotalPrice(0);
                hideCheckoutSection();
                return cartMiniInner.append(`<h5 style="text-align:center; margin-top:20px;">Cart is Empty</a></h5>
`)
            }


            cartItem.forEach(function(item) {
                var listItem = `
                <li>
                    <div class="cartmini__thumb">
                        <a href="#">
                            <img src='{{ asset('public/storage/images/') }}/${item.product.image}' alt="">
                        </a>
                    </div>
                    <div class="cartmini__content">
                        <h5><a href="product-details.html" id="cartTitle">${item.name}</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                            <input class="cart-input" type="text" value="${item.quantity || 1}">
                        </div>
                        <div class="product__sm-price-wrapper">
                            <span class="product__sm-price">₹${item.size ? item.size * (item.quantity || 1) : item.price * (item.quantity || 1)}</span>
                        </div>
                    </div>
                    <a href="#" class="cartmini__del" data-item-id=${item.id}><i class="fal fa-times"></i></a>
                </li>`;

                cartMiniInner.append(listItem);
            });

            var total = cartItem.reduce(function(sum, item) {
                var itemPrice = item.size ? item.size * (item.quantity || 1) : item.price * (item.quantity || 1);
                return sum + itemPrice;
            }, 0);

            $('.cartmini__checkout-title span').text('₹' + total.toFixed(2));
            showCheckoutSection();

            $('.cartmini__del').on('click', function(e) {
                e.preventDefault();
                var itemId = $(this).attr('data-item-id');
                handleDeleteCartItem(itemId);
            });
        }

        function handleDeleteCartItem(itemId) {
            $.ajax({
                type: 'GET',
                url: '/deleteCartItem/' + itemId,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // Assuming the response contains the updated cart data
                    updateCartContent(response.cartItem);
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    console.log(xhr);
                    // Handle error if needed
                }
            });
        }

        function hideCheckoutSection() {
            $('.cartmini__checkout').hide();
        }

        function showCheckoutSection() {
            $('.cartmini__checkout').show();
        }
    </script>
@endpush
