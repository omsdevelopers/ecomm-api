<?php

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{

    public function brand_add(Request $request)
    {
        $data['header_title'] = "Add New Brand";
        return view('admin.brand.add-new', $data);
    }

    public function store(Request $request)
    {
        request()->validate(['name' => 'required']);

        $brand = new BrandModel;
        $brand->name = trim($request->name);
        $brand->status = trim($request->status);
        $brand->save();

        return redirect('admin/brand/list')->with('success', '');
    }

    public function list(Request $request)
    {
        $data['getRecord'] = BrandModel::all('id', 'name', 'status');
        $data['header_title'] = "Category List";

        return view('admin.brand.list', $data);
    }

    public function brand_edit($id, Request $request)
    {
        $data['getRecord'] = BrandModel::find($id);
        $data['header_title'] = "Edit Brand";

        return view('admin.brand.edit', $data);
    }

    public function brand_update($id, Request $request)
    {

        $brand = BrandModel::find($id);
        $brand->name = trim($request->name);
        $brand->status = trim($request->status);
        $brand->save();

        return redirect('admin/brand/list')->with('success', '');
    }

    public function brand_delete($id, Request $request)
    {


        $brand = BrandModel::find($id);
        $brand->delete();
        
        return redirect()->back()->with('success', 'Brand Successfully Deleted');
    }
}
