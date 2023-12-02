<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Hash;

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CartModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Middleware\StartSession;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(StartSession::class);
    }

    public function addToCart(Request $request)
    {
        try {
            $productDetails = ProductModel::find($request->input('product_id'));

            // if (!$request->input('size')) {
            //     return response()->json(['error' => 'Select Size'], 422);
            // }

            $userId = $request->input('user_id');

            // For guest users, use session_id consistently
            $sessionId = $request->session()->getId();

            // Check if the cart item already exists for the given product, size, and session/user
            $existingCartItem = CartModel::where('product_id', $productDetails->id)
                ->where('size', $request->input('size'))
                ->where('quantity', $request->input('quantity'))
                ->where(function ($query) use ($userId, $sessionId) {
                    $query->where('user_id', $userId)->orWhere('session_id', $sessionId);
                })
                ->first();

            if ($existingCartItem) {
                return response()->json(['error' => 'Item is already in the cart'], 422);
            }

            $cartItem = new CartModel([
                'product_id' => $productDetails->id,
                'name' => $productDetails->name,
                'size' => $request->input('size'),
                'quantity' => $request->input('quantity'),
                'price' => $request->input('price'),
                'total' => $request->input('total'),
                'user_id' => $userId,
                'session_id' => $sessionId,
            ]);

            // Save the cart item in the database
            $cartItem->save();

            return response()->json(['message' => 'Item added to cart successfully', 'session_id' => $sessionId, 'user_id' => $userId]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function cartList(Request $request)
    {
        $userId = $request->input('user_id');;
        $sessionId = $request->input('session_id');;

        if ($userId) {
            // User is authenticated, retrieve cart for the authenticated user
            $cartItems = CartModel::where('user_id', $userId)->with('product')->get();
        } else {
            // User is a guest, retrieve cart for the guest user based on session ID
            $cartItems = CartModel::where('session_id', $sessionId)->with('product')->get();
        }

        return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItems]);
    }
}
