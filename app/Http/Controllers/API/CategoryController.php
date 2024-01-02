<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CategoryController extends Controller
{
    public function index()
    {
        $records = CategoryModel::all();

        // Transform each record to include the full image URL
        $recordsWithImageUrl = $records->map(function ($record) {
            $record['image'] = $record->image ? asset('/public/images/' . $record->image) : null;
            return $record;
        });

        return response()->json(['data' => $recordsWithImageUrl]);
    }
    public function categorys($id)
    {
        try {
            $productDetails = CategoryModel::where("id", $id)
                ->with('products')->get()->first();
            if ($productDetails) {
                $baseImageUrl = asset('/public/images/');
                foreach ($productDetails->products as $product) {
                    $product->image = $product->image ? $baseImageUrl . $product->image : null;
                }

                $productDetails->image = $productDetails->image ? $baseImageUrl . $productDetails->image : null;

                return response()->json(['categorys' => $productDetails]);
            } else {
                return response()->json(['error' => 'Product not found']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error']);
        }
    }
}
