<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('username','password'))) {
            return redirect('/home');
        }

        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
