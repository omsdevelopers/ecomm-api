<!-- Cartmini sidber start -->
<div class="fix">
    <div class="shoping__sidebar">
        <div class="cartmini__wrapper">
            <div class="cartmini__title">
                <h4>Shopping Cart</h4>
            </div>
            
            <div class="cartmini__close">
                <button type="button"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget">
                <div class="cartmini__inner">
                    <ul>
                        
                    </ul>
                </div>
                <div class="cartmini__checkout">
                    <div class="cartmini__checkout-title mb-30">
                        <h4>Subtotal:</h4>
                        <span></span>
                    </div>
                    <div class="cartmini__checkout-btn">
                        <a href="{{route ('cart-items')}}" class="bd-fill__btn w-100"> <span></span> view cart</a>
                        {{-- <a href="checkout.html" class="bd-fill__btn-2 w-100"> <span></span> checkout</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cartmini sidber end -->

@push('scripts')
    <script>
        
    </script>
@endpush

