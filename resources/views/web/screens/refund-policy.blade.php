@extends('web.layouts.app')

@section('content')
    <main >

        <div class="bd-breadcrumb__area hero__overlay Breadcrumb__height d-flex align-items-center"
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
                                    <li class="trail-item trail-end"><span>Refund Policy</span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-breadcrumb__title">
                            <h2>Refund Policy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <article class="container mt-4" style="margin-bottom: 100px; ">


            {{-- Returns, Exchanges & Refunds --}}
            <p><strong>RETURNS, EXCHANGES & REFUNDS:</strong></p>
            <p>We currently don’t accept returns or exchange products that are bought online. Sorry for the inconvenience
                and thanks for understanding!</p>

            {{-- Cancellations of Orders --}}
            <p><strong>CANCELLATIONS OF ORDERS:</strong></p>
            <p>We start processing your order as soon as you pay for the same, and hence we do not encourage any
                cancellation of orders.
                If you wish to discuss further regarding a potential cancellation, please contact our customer support team
                at <a href="tel:+916380664585">+91 6364650068</a> or email to <a
                    href="mailto:support@naatumaadu.in">support@naatumaadu.in</a>.</p>

            {{-- Out of Stock Items --}}
            <p><strong>OUT OF STOCK ITEMS:</strong></p>
            <p>Naatumaadu is committed to ensuring the availability and accuracy of inventory exhibited on the website.
                However, if we are unable to ship your purchased items due to unavailability or damage, we will inform you
                within 2 days of your purchase date and process a refund to your credit card account. All refunds are
                subject to normal banking procedures.</p>
        </article>
    </main>
@endsection
