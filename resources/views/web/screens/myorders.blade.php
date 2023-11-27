@extends('web.layouts.app')

@section('content')

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
                                <li class="trail-item trail-end"><span>My Orders</span></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="bd-breadcrumb__title">
                        <h2>My Orders</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 100px; margin-top: 100px;">
        <h1 class="mb-4">My Orders</h1>

        @if (count($orders) > 0)
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        {{-- <th>Quantity</th> --}}
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                @foreach ($products->whereIn('id', $order->product_id) as $product)
                                    {{ $product->name }}
                                    <br>
                                @endforeach
                            </td>
                            {{-- <td>{{ $order->quantity }}</td> --}}
                            <td>{{ $order->order_status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">
                <p>No orders found.</p>
            </div>
        @endif
    </div>
@endsection
