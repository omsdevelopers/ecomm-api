@extends('web.layouts.app')

@section('content')
    <main>

        <!-- Breadcrumb area start -->
        <div class="bd-breadcrumb__area include__bg hero__overlay Breadcrumb__height d-flex align-items-center"
            data-background="assets/img/hero/aboutus-breadcrumbs.jpg" style="background-position: bottom;
            background-size: cover;
            background-repeat: no-repeat">
            <div class="container fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb__menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                                    <li class="trail-item trail-end"><span>Cart</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>dairy products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area start -->

        <!-- Cart area start  -->
        <section class="cart-area pt-120 pb-120">
            <div class="container small-container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="{{-- Product details URL --}}">
                                                    <img src="{{ asset('public/storage/images/' . $item->product->image) }}"
                                                        alt="img">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{-- Product details URL --}}">
                                                    {{ $item->name }}
                                                </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">₹{{ $item->size }}</span>
                                            </td>
                                            <td class="product-quantity text-center">
                                                <div class="product-quantity mt-10 mb-10">
                                                    <div class="product-quantity-form">
                                                        <form action="#">
                                                            <button class="cart-minus"><i class="far fa-minus"></i></button>
                                                            <input class="cart-input" id="quantityInput"type="text"
                                                                value="{{ $item->quantity ?? 1 }}"
                                                                data-item-id="{{ $item->id }}" name="quantity">
                                                            <button class="cart-plus"><i class="far fa-plus"></i></button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                @php
                                                    $itemPrice = $item->size ? $item->size * ($item->quantity ?: 1) : $item->price * ($item->quantity ?: 1);
                                                @endphp
                                                <span class="amount">₹{{ $itemPrice }}</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="" onclick="handleDeleteCartItem({{ $item->id }})"><i
                                                        class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <button class="bd-fill__btn-2 mb-4" name="update_cart" type="submit">Update
                                            cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-success" id="successMessage" style="display: none;"></div>
                            <div class="alert alert-danger" id="errorMessage" style="display: none;"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>

                                    <ul class="mb-20">
                                        @php
                                            $subtotal = 0;
                                            foreach ($cart as $item) {
                                                $itemPrice = $item->size ? $item->size * ($item->quantity ?: 1) : $item->price * ($item->quantity ?: 1);
                                                $subtotal += $itemPrice;
                                            }
                                        @endphp
                                        <li>Subtotal <span></span>:  ₹{{ $subtotal }}</li>
                                        <li>Total <span></span>:  ₹{{ $subtotal }}</li>
                                    </ul>
                                    <a class="bd-fill__btn-2" href="{{route('checkout',['id' => $cart->pluck('id')->implode(','), 'subtotal' => $subtotal]) }})}}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart area end  -->

    </main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            console.log('ddsa');

            $(".cart-plus").unbind().click(function(e) {
                e.preventDefault();
                var $input = $(this).parent().find("input");
                var quantity = parseInt($input.val()) || 0;
                $input.val(quantity + 1);
                $input.change();
                return false;
            });

            $(".cart-minus").unbind().click(function(e) {
                e.preventDefault();
                var $input = $(this).parent().find("input");
                var quantity = parseInt($input.val()) || 0;
                if (quantity > 1) {
                    $input.val(quantity - 1);
                    $input.change();
                }
                return false;
            });

            $(".cart-input").unbind().change(function(e) {
                e.preventDefault();
                updateCartItem($(this));
            });

            $(".bd-fill__btn-2[name='update_cart']").click(function(e) {
                e.preventDefault();

                // Loop through each cart item
                $(".cart-input").each(function() {
                    updateCartItem($(this), true);
                });
            });

            function updateCartItem(input, isUpdateCart) {

                var quantity = parseInt(input.val()) || 0;
                console.log("cc", quantity)

                var priceText = input.closest('tr').find('.product-price span.amount').text().replace(
                    '₹', '');
                var price = parseFloat(priceText.trim()) || 0; // Default to 0 if NaN

                var subtotal = quantity * price;
                console.log("Price Text: ", subtotal);


                // Update the subtotal for the current item
                input.closest('tr').find('.product-subtotal span.amount').text('₹' + subtotal.toFixed(
                    2));

                if (isUpdateCart) {
                    var itemId = input.data('item-id');

                    updateCartItemOnServer(itemId, quantity, subtotal);
                }

                // Calculate the new total and update the page
                // updateTotal(subtotal);
            }

            // function updateTotal(subtotal) {
            //     // Update the subtotal on the page
            //     var currentSubtotal = parseFloat($('.cart-page-total ul li:nth-child(1) span').text().replace('₹',
            //         '')) || 0;
            //     var newSubtotal = currentSubtotal + subtotal;
            //     $('.cart-page-total ul li:nth-child(1) span').text('₹' + newSubtotal.toFixed(2));

            //     // Update the total on the page
            //     var currentTotal = parseFloat($('.cart-page-total ul li:nth-child(2) span').text().replace('₹',
            //         '')) || 0;
            //     var newTotal = currentTotal + subtotal;
            //     $('.cart-page-total ul li:nth-child(2) span').text('₹' + newTotal.toFixed(2));
            // }

        });

        function handleDeleteCartItem(itemId) {
            $.ajax({
                type: 'GET',
                url: '/deleteCartItem/' + itemId,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response, xhr) {
              
                        window.location.reload();
                    // }
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    console.log(xhr);
                    // Handle error if needed
                }
            });
        }

        function updateCartItemOnServer(itemId, quantity, subtotal) {
            // Send an AJAX request to update the server-side data
            $.ajax({
                type: 'POST',
                url: '/updateCartItem/' + itemId,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "quantity": quantity,
                    "subtotal": subtotal,
                },
                success: function(response) {
                    // Handle success if needed
                    console.log(response)

                    if (response) {
                        $("#successMessage").html(response.message).show();
                        $("#errorMessage").hide();

                        window.location.reload();

                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error in AJAX call:', status, error);
                    $("#errorMessage").html(xhr.responseJSON.error).show();
                    $("#successMessage").hide();
                }
            });
        }
    </script>
@endpush
