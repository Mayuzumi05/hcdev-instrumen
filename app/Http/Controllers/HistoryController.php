<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        // $user = User::all();
        $id = auth()->user()->id;
        
        $userwithid = DB::table('users')
        ->join('unit', 'users.unit_bagian', '=', 'unit.id')
        ->select('users.*', 'unit.nama_unit')
        ->where('users.id', $id)
        ->get();

        return view('product.history', compact('userwithid'));
    }
}
