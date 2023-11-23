<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\CartModel;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {
        try {
            $api_key = 'rzp_test_m0Bj5wG8RvRdH1';
            $api_secret = 'Ck8GBhXDBJU4dvaJ6FVrZCMl';

            $api = new Api($api_key, $api_secret);

            $orderData = [
                'receipt' => 'order_' . time(),
                'amount' => $request->input('subtotal') * 100,
                'currency' => 'INR', // Update the currency code as needed
                'payment_capture' => 0,
            ];

            $order = $api->order->create($orderData);
            $data = [
                'key' => $api_key,
                'amount' => $order->amount,
                'order_id' => $order->id,
                'name' => 'nattuMaadu',
                'description' => 'Order Payment',
                // 'image' => 'path_to_your_logo',
                'prefill' => [
                    'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                    'email' => $request->input('email'),
                    'contact' => $request->input('phone'),
                ],
                'notes' => [
                    'address' => $request->input('address'),
                    'city' => $request->input('city'),
                    // ... other fields
                ],
                'theme' => [
                    'color' => '#F37254',
                ],
            ];

            return view('web.screens.razorpay', ['data' => $data]);
        } catch (\Exception $e) {
            // Handle exceptions or errors
            return response()->json(['error' => 'Error handling payment'], 500);
        }
    }
}
