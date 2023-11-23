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

            if (!$request->input('size')) {
                return response()->json(['error' => 'Select Size'], 422);
            }

            $userId = Auth::id();

            // For guest users, use session_id instead of user_id
            if (!$userId) {
                $sessionId = session()->getId();
                $existingCartItem = CartModel::where('product_id', $productDetails->id)
                    ->where('session_id', $sessionId)
                    ->where('size', $request->input('size'))
                    ->first();
            } else {
                // For authenticated users, use user_id
                $existingCartItem = CartModel::where('product_id', $productDetails->id)
                    ->where('user_id', $userId)
                    ->where('size', $request->input('size'))
                    ->first();
            }

            if ($existingCartItem) {
                return response()->json(['error' => 'Item is already in the cart'], 422);
            }

            $cartItem = new CartModel([
                'product_id' => $productDetails->id,
                'name' => $productDetails->name,
                'size' => $request->input('size'),
                'quantity' => $request->input('quantity'),
                'price' => $productDetails->price,
                'user_id' => $userId,
                'session_id' => $sessionId ?? 'null',
            ]);

            // Save the cart item in the database
            $cartItem->save();

            return response()->json(['message' => 'Item added to cart successfully', 'cartItem' => $cartItem]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }


    public function cartList()
    {
        $userId = auth()->id();
        $sessionId = session()->getId();

        if ($userId) {
            // User is authenticated, retrieve cart for the authenticated user
            $cartItems = CartModel::where('user_id', $userId)->with('product')->get();
        } else {
            // User is a guest, retrieve cart for the guest user based on session ID
            $cartItems = CartModel::where('session_id', $sessionId)->with('product')->get();
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
        $sessionId = session()->getId();

        if ($userId) {
            $updatedCart = CartModel::where('user_id', $userId)->get();
        } else {
            $updatedCart = CartModel::where('session_id', $sessionId)->with('product')->get();
        }

        return $updatedCart;
    }

    public function updateCartItem(Request $request, $itemId)
    {
        try {
            $cartItem = CartModel::findOrFail($itemId);
            // dd($cartItem);

            // Update the quantity
            $cartItem->quantity = $request->input('quantity');
            $cartItem->total = $request->input('subtotal');
            $cartItem->save();

            return response()->json(['message' => 'Cart item updated successfully']);
        } catch (\Exception $e) {
            // Handle exceptions or errors
            return response()->json(['error' => 'Error updating cart item'], 500);
        }
    }
}
