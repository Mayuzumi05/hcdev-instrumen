<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(Request $request){
        // $user = User::all();
        $id = auth()->user()->id;
        
        $userwithid = DB::table('users')
        ->join('unit', 'users.unit_bagian', '=', 'unit.id')
        ->select('users.*', 'unit.nama_unit')
        ->where('users.id', $id)
        ->get();
        
        $transaksi = DB::table('transaksi')
            ->join('unit', 'transaksi.lokasi_akhir', '=', 'unit.id')
            ->select('transaksi.*', 'unit.nama_unit')
            ->latest()
            ->get();

        return view('product.history', compact('userwithid', 'transaksi'));
    }

    public function fetchdetailhistory($id){
        $history = DB::table('history')
            ->join('unit', 'history.lokasi_awal', '=', 'unit.id')
            // ->join('unit', 'history.lokasi_akhir', '=', 'unit.id')
            ->select('history.*', 'unit.nama_unit')
            ->where('history.kode_transaksi', $id)
            ->get();

        // return response()->json([
        //     'history'=>$history,
        // ]);

        return response()->json($history);
    }
}
