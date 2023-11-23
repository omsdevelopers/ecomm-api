<!-- razorpay.blade.php -->

@extends('web.layouts.app')

@section('content')
    <div>

    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {!! json_encode($data) !!};

            var rzp = new Razorpay(options);

            rzp.on('payment.failed', function(response) {
                // Handle payment failure
                console.log(response.error.code);
                console.log(response.error.description);
                console.log(response.error.source);
                console.log(response.error.step);
                console.log(response.error.reason);
                console.log(response.error.metadata.order_id);
                console.log(response.error.metadata.payment_id);
            });

         

            // Open Razorpay modal directly when the page loads
            rzp.open();

            rzp.on('payment.success', function(response) {
                console.log("hi",response.razorpay_payment_id);

                window.location.href =
                '/confirmation'; 
            });

        });
    </script>
@endpush
