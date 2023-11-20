<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Cart;

class CartController  extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        try {
            $productDetails = ProductModel::where("id", $productId)->first();

            // $cart = $request->session()->get('cart', []);

            $cartItem = [
                'product_id' => $productDetails->id,
                'name' => $productDetails->name,
                'size' => $request->input('size'),
                'quantity' => $request->input('quantity'),
                'price' => $productDetails->price,
                'user_id' => Auth::user()->id ?? '',
            ];

            // // Add the item to the cart
            // $cart[] = $cartItem;
            // Cart::create($cartItem);
            // Store the updated cart in the session
            // $request->session()->put('cart', $cart);

            return response()->json(['message' => 'Item added to cart successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
