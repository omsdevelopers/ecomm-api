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

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        try {
            $productDetails = ProductModel::find($productId);

            if (!$productDetails) {
                return response()->json(['error' => 'Product not found'], 404);
            }

            $existingCartItem = CartModel::where('product_id', $productDetails->id)
                ->where('user_id', Auth::id() ?? 0)
                ->where('size', $request->input('size'))
                ->where('quantity', $request->input('quantity'))
                ->first();

            if ($existingCartItem) {
                return response()->json(['error' => 'Item is already in cart'], 422);
            }

            $cartItem = new CartModel([
                'product_id' => $productDetails->id,
                'name' => $productDetails->name,
                'size' => $request->input('size'),
                'quantity' => $request->input('quantity'),
                'price' => $productDetails->price,
                'user_id' => Auth::id() ?? 0,
            ]);

            // Save the cart item in the database
            $cartItem->save();

            return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItem]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Select Size'], 500);
        }
    }

    public function cartList()
    {
        $userId = auth()->id();

        if ($userId) {
            // User is authenticated, retrieve cart for the authenticated user
            $cartItems = CartModel::where('user_id', $userId)->get();
        } else {
            // User is a guest, retrieve cart for the guest user based on session ID
            $cartItems = CartModel::where('user_id', 0)->with('product')->get();
        }

        return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItems]);
    }

    public function deleteCartItem($id)
    {
        $cartItem = CartModel::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $cartItem->delete();
        $updatedCart = $this->getUpdatedCartData();

        return response()->json(['cartItem' => $updatedCart]);
    }

    private function getUpdatedCartData()
    {
        $userId = auth()->id();

        if ($userId) {
            $updatedCart = CartModel::where('user_id', $userId)->get();
        } else {
            $updatedCart = CartModel::where('user_id', 0)->with('product')->get();
        }

        return $updatedCart;
    }
}
