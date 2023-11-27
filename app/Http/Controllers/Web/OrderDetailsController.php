<?php

namespace App\Http\Controllers\Web;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class OrderDetailsController extends Controller
{
    public function myOrders()
    {
        $userId = Auth::id();

        if ($userId) {
            $orders = OrderModel::where("user_id", $userId)->get();
            Log::info('data : ' . json_encode($orders));
        } else {
            $sessionId = session()->getId();

            $orders = OrderModel::where("session_id", $sessionId)->get();
        }

        $productIds = $orders->pluck('product_id')->flatten()->unique()->toArray();

        $products = ProductModel::whereIn('id', $productIds)->get();


        return view('web.screens.myorders', compact('orders', 'products'));
    }
}
