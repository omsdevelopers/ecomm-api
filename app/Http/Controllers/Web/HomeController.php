<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();

        $feature = ProductModel::where("featured", 1)
            ->with('category', 'brand')
            ->get();
            
        return view('web.screens.home', [
            'products' => $products,
            'feature' => $feature,
            'header_title' => "Home",
        ]);
    }
}
