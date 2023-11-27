<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            line-height: 1.6;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            /* Center items vertically */
            background-color: #5B8C51;
            color: #fff;
            text-align: center;
            padding: 15px 20px;
            /* Increased padding for better visual appearance */
        }

        h1 {
            color: #fff;
            margin: 0;
            font-size: 20px;
            flex-grow: 1;
            text-align: right;
        }


        h2,
        h3 {
            color: #333;
        }

        p {
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <header>
            <div>
                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
            </div>
            <div>
                <h1>Invoice</h1>
            </div>
        </header>
        <div style="padding: 20px;">
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
                            <td>{{ $product->product->name }}</td>
                            <!-- Assuming you have a quantity field in your order, adjust accordingly -->
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->size }}</td>
                            <td>&#x20B9;{{ $product->quantity * $product->size }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="total">Total: &#x20B9;
                {{ $totalSum }}</div>

        </div>
    </div>
</body>

</html>
