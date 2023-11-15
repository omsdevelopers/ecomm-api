<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function login()
    {
        if (!empty(Auth::check()) && Auth::user()->is_admin == 0) {

            return view('/');
        }
        $data['header_title'] = "Login";
        return view('web.screens.login', $data);
    }

    public function register()
    {
        $data['header_title'] = "Register";
        return view('web.screens.register', $data);
    }

    public function services()
    {
        $data['header_title'] = "Services";
        return view('web.screens.services', $data);
    }

    public function about()
    {
        $data['header_title'] = "About-Us";
        return view('web.screens.about', $data);
    }

    public function contact()
    {
        $data['header_title'] = "Contact-Us";
        return view('web.screens.contact', $data);
    }

}