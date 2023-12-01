<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CartModel;
use App\Models\Gallery;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function login()
    {
        if (!empty(Auth::check()) && Auth::user()->is_admin == 0) {

            return view('/');
        }
        $data['header_title'] = "Login";
        return view('web.screens.login', $data);
    }

    public function register()
    {
        $data['header_title'] = "Register";

        return view('web.screens.register', $data);
    }

    public function services()
    {
        $data['header_title'] = "Services";
        return view('web.screens.services', $data);
    }

    public function about()
    {
        $data['header_title'] = "Taste and tradition";
        return view('web.screens.about', $data);
    }

    public function contact()
    {
        $data['header_title'] = "Quill & Platter";
        return view('web.screens.contact', $data);
    }

    public function cart()
    {
        $userId = auth()->id();
        $sessionId = session()->getId();

        if ($userId) {
            // User is authenticated, retrieve cart for the authenticated user
            $cartItems = CartModel::where('user_id', $userId)->get();
        } else {
            // User is a guest, retrieve cart for the guest user based on session ID
            $cartItems = CartModel::where('session_id', $sessionId)->with('product')->get();
        }

        return view('web.screens.cart', [
            'cart' => $cartItems,
            'header_title' => "Cart",
        ]);
    }

    public function productDetails($productId)
    {
        $productDetails = ProductModel::where("id", $productId)->first();

        return view('web.screens.product', [
            'product' => $productDetails,
            'header_title' => "Product",
        ]);
    }

    public function checkout($id)
    {
        $cartIds = explode(',', $id);

        $cartItems = CartModel::whereIn('id', $cartIds)->get();
        // dd($cartItems);

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item->size ? $item->size * ($item->quantity ?: 1) : $item->price * ($item->quantity ?: 1);
        }
        
        Log::info('checkout : ' . json_encode($cartItems));

        return view('web.screens.checkout', [
            'header_title' => "Checkout",
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
        ]);
    }

    public function refundPolicy(){
        return view('web.screens.refund-policy', [
            'header_title' => "Refund Policy",
        ]);
    }

    public function terms(){
        return view('web.screens.terms', [
            'header_title' => "Terms and condition",
        ]);
    }

    public function privacy(){
        return view('web.screens.privacy', [
            'header_title' => "Privacy Policy",
        ]);
    }

    public function shipping(){
        return view('web.screens.shipping', [
            'header_title' => "Shipping",
        ]);
    }

    public function promotion(){
        return view('web.screens.naattulife', [
            'header_title' => "NaattuLife",
        ]);
    }

    
    public function gallery(){

        $gallery = Gallery::all();

        return view('web.screens.gallery', [
            'galleries' => $gallery,
            'header_title' => "A visual ode",
        ]);
    }
}
