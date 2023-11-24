<!-- razorpay.blade.php -->

@extends('web.layouts.app')

@section('content')
    <div class="card card-default">
      
        <div class="card-body text-center">
            <form id="razorpay-payment-form" action="{{ route('razorpay.payment.store') }}" method="POST">
                @csrf
                <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ $data['key'] }}"
                    data-amount="{{ $data['amount'] }}" data-currency="INR" data-order_id="{{ $data['order_id'] }}"
                    data-name="{{ $data['name'] }}" data-description="{{ $data['description'] }}"
                    data-image="{{ $data['image'] ?? '' }}" data-prefill.name="{{ $data['prefill']['name'] }}"
                    data-prefill.email="{{ $data['prefill']['email'] }}" data-prefill.contact="{{ $data['prefill']['contact'] }}"
                    data-theme.color="{{ $data['theme']['color'] }}"></script>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                var options = {!! json_encode($data) !!};
                console.log('Payment successful:', options);

                // Automatically submit the form when the Razorpay modal opens
        

                // Submit the form when the Razorpay modal is opened
                // razorpayForm.submit();
            });
        </script>
    @endpush
@endsection
