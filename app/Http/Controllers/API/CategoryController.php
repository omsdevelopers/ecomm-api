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
        return response()->json(['data' => $records]);
    }
    public function categorys($id)
    {
    try {
        $productDetails = ProductModel::where("category_id", $id)->with('category')
        ->get();        //  $categorys = CategoryModel::all();
        if ($productDetails) {

        return response()->json(['categorys' => $productDetails]);
        } 
        else 
        {
        return response()->json(['error' => 'Product not found'], Response::HTTP_NOT_FOUND);
    }
}

     catch (\Exception $e) {
        return response()->json(['error' => 'Internal Server Error'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
}

