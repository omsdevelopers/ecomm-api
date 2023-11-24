<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        /* Add your styling for the invoice here */
        /* Example styles, adjust as needed */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Add more styles for the invoice as needed */
    </style>
</head>

<body>
    <div class="invoice-container">
        <h1>Invoice</h1>
        <p>Order ID: {{ $order->id }}</p>
        <p>Date: {{ $order->created_at->format('Y-m-d') }}</p>

        <!-- Display other order details as needed -->

        <h2>Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <!-- Assuming you have a quantity field in your order, adjust accordingly -->
                        {{-- <td>{{ $order->quantity[$loop->index] }}</td> --}}
                        <td>{{ $product->price }}</td>
                        {{-- <td>{{ $order->quantity[$loop->index] * $product->price }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Total: ₹{{ $order->total }}</h3>

        <!-- Add more sections or details as needed -->

    </div>
</body>

</html>
