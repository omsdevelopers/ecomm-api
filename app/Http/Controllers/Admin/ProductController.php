<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Http\Controllers\Controller;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $data['header_title'] = "Add New Product";
        $categories = CategoryModel::all();
        $brands = BrandModel::all();


        return view('admin.product.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'header_title' => "Add New Product",
        ]);
    }

    public function store(Request $request)
    {
        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName); // The file will be stored in storage/app/public/images
            } else {
                $imageName = null; // No image uploaded
            }

            // Save the product with other data (including the image path if needed)
            $productData = [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
                'brand_id' => $request->input('brand_id'),
                'image' => $imageName, 
                'size' => $request->input('sizes'),
            ];

            ProductModel::create($productData);

            Alert::success('Success', 'Product added successfully!');

            return redirect()->route('products.index')->withSuccess('Product added successfully!');
        } catch (\Exception $e) {
            // Handle the exception
            
            Alert::error('Error', 'Product creation failed. Please try again.');
            return back()->withInput()->withErrors(['error' => 'Product creation failed. Please try again.']);
        }
    }

    public function show(ProductModel $product)
    {
        return view('products.show', compact('product'));
    }
}
