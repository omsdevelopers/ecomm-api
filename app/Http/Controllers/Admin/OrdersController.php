<?php

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
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

        $productIds = $order->product_id;
        $products = ProductModel::whereIn('id', $productIds)->get();

        Log::info('data : ' . json_encode($order));


        $pdf = PDF::loadView('admin.invoice', ['order' => $order, 'products' => $products]);


        return $pdf->download('invoice.pdf');
    }
}
