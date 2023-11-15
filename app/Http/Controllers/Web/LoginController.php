<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function submit(Request $request){
        
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password, 'is_admin'=>0, 'status'=>0])){
            return redirect('/');
        }
        else{
            return redirect()->back()->withErrors('error','Please enter correct email & password');
        }
    }
}