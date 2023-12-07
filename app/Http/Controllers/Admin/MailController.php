<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\Smtp;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class MailController extends Controller
{

    public function brand_add(Request $request)
    {
        $data['header_title'] = "Add New Brand";
        return view('admin.brand.add-new', $data);
    }

    public function store(Request $request)
    {
        request()->validate(['MAIL_MAILER' => 'required']);

        $brand = new Smtp;
        $brand->MAIL_MAILER = trim($request->MAIL_MAILER);
        $brand->MAIL_HOST = trim($request->MAIL_HOST);
        $brand->MAIL_PORT = trim($request->MAIL_PORT);
        $brand->MAIL_USERNAME = trim($request->MAIL_USERNAME);
        $brand->MAIL_PASSWORD = "'".$request->MAIL_PASSWORD."'";
        $brand->MAIL_ENCRYPTION = trim($request->MAIL_ENCRYPTION);
        // $brand->MAIL_FROM_ADDRESS = trim($request->MAIL_FROM_ADDRESS);
        // $brand->MAIL_FROM_NAME = trim($request->MAIL_FROM_NAME);

        $brand->save();

        return redirect('admin/brand/list')->with('success', '');
    }

    public function list(Request $request)
    {
        $data['getRecord'] = Smtp::all();
        $data['header_title'] = "Category List";

        return view('admin.brand.list', $data);
    }

    public function brand_edit($id, Request $request)
    {
        $data['getRecord'] = Smtp::find($id);
        $data['header_title'] = "Edit Brand";

        return view('admin.brand.edit', $data);
    }

    public function brand_update($id, Request $request)
    {

        $brand = Smtp::find($id);
        $brand->MAIL_MAILER = trim($request->MAIL_MAILER);
        $brand->MAIL_HOST = trim($request->MAIL_HOST);
        $brand->MAIL_PORT = trim($request->MAIL_PORT);
        $brand->MAIL_USERNAME = trim($request->MAIL_USERNAME);
        $brand->MAIL_PASSWORD = $request->MAIL_PASSWORD;
        $brand->MAIL_ENCRYPTION = trim($request->MAIL_ENCRYPTION);
        // $brand->MAIL_FROM_ADDRESS = trim($request->MAIL_FROM_ADDRESS);
        // $brand->MAIL_FROM_NAME = trim($request->MAIL_FROM_NAME);

        $brand->save();

        return redirect('admin/brand/list')->with('success', '');
    }

    public function brand_delete($id, Request $request)
    {


        $brand = Smtp::find($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand Successfully Deleted');
    }
    public function maillist()
    {
        $data['getRecord'] = Mailstores::all();
        $data['header_title'] = "Category List";

        return view('admin.category.list', $data);
    }
    public function deletemail($id, Request $request)
    {
        $mail = mailstores::find($id);
        // dd($mail);
        $mail->delete();
        // return view('admin.category.list')->with('success', 'mail Successfully Deleted');
        return redirect()->back()->with('success', 'Brand Successfully Deleted');
    }
}
