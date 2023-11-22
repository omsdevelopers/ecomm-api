<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $data['header_title'] = "About-Us";
        return view('web.screens.about', $data);
    }

    public function contact()
    {
        $data['header_title'] = "Contact-Us";
        return view('web.screens.contact', $data);
    }

    public function cart()
    {
        $userId = auth()->id();
        $sessionId = session()->getId();

        if ($userId) {
            // User is authenticated, retrieve cart for the authenticated user
            $cartItems = CartModel::where('user_id', 1)->get();
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
}
