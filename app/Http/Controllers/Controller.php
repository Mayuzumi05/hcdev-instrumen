<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(){
        return view('user.login');
    }
    
    public function register(){
        return view('user.register');
    }

    public function home(){
        return view('product.home');
    }
    
    public function user(){
        return view('product.user');
    }

    public function pindah(){
        return view('product.pindah');
    }

    public function barang(){
        return view('product.barang');
    }

    public function history(){
        return view('product.history');
    }

    public function notification(){
        return view('product.notification');
    }

    public function setting(){
        return view('product.setting');
    }
}
