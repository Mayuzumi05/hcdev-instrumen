<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBOMController extends Controller
{
    public function index(){
        return view('bom.homebom');
    }
}
