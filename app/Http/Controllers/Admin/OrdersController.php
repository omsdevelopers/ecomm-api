<?php

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class OrdersController extends Controller
{

    public function listOrders(Request $request)
    {
        $data['header_title'] = "Add New Brand";
        $orders = OrderModel::all();

        return view('admin.orders.index',  [
            'orders' => $orders,
            'header_title' => "List Orders",
        ]);
    }

    public function updateStatus(Request $request, $orderId)
    {
        $order = OrderModel::findOrFail($orderId);


        $order->update(['order_status' => $request->input('order_status')]);

        return Redirect::back()->with('success', 'Order status updated successfully.');
    }

    public function show($orderId)
    {
        $order = OrderModel::findOrFail($orderId);

        return view('admin.orders.show', ['order' => $order]);
    }

    public function edit($orderId)
    {
        $order = OrderModel::findOrFail($orderId);

        return view('admin.orders.edit', ['order' => $order]);
    }

    public function destroy($orderId)
    {
        $order = OrderModel::findOrFail($orderId);

        $order->delete();

        return Redirect::back()->with('success', 'Order deleted successfully.');
    }

    public function generateInvoice($orderId)
    {
        $order = OrderModel::findOrFail($orderId);

        // $productIds = $order->product_id;
        // $products = ProductModel::whereIn('id', $productIds)->get();

        if (empty($order->user_id)) {
            $cartItems = CartModel::where('session_id', $order->session_id)->with('product')->get();
        } else {
            $cartItems = CartModel::where('user_id', $order->user_id)->with('product')->get();
        }

        $totalSum = $cartItems->sum(function ($item) {
            return $item->quantity * $item->size;
        });

        Log::info('data : ' . json_encode($totalSum ));


        $pdf = PDF::loadView('admin.invoice', ['order' => $order, 'products' => $cartItems, 'totalSum' => $totalSum]);


        return $pdf->download("{$order->billing_first_name}_{$order->billing_last_name}.pdf");

    }
}
