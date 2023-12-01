<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Http\Response;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductModel::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $productDetails = ProductModel::where('id', $id)->with('category', 'brand')->first();
    
            if ($productDetails) {
                return response()->json($productDetails, Response::HTTP_OK);
            } else {
                return response()->json(['error' => 'Product not found'], Response::HTTP_NOT_FOUND);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
