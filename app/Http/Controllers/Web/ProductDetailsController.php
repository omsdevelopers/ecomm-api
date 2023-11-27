<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductDetailsController extends Controller
{
    public function getProductDetails($productId)
    {
        $productDetails = ProductModel::where("id", $productId)->with('category', 'brand')
            ->first();

        $sizePriceArray = [];
        $sizePricePairs = explode(', ', $productDetails->size);

        foreach ($sizePricePairs as $pair) {
            list($size, $price) = explode(':', $pair);
            $sizePriceArray[$size] = $price;
        }

        return response()->json(compact('productDetails', 'sizePriceArray'));
    }
}
