<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = ProductModel::all();

        return view('web.screens.home', [
            'products' => $products,
            'header_title' => "Home",
        ]);    
    }

}