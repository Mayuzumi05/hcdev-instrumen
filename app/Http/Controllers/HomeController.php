<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $id = auth()->user()->id;
        $user = DB::table('users')
            ->join('unit', 'users.unit_bagian', '=', 'unit.id')
            ->select('users.*', 'unit.nama_unit')
            ->where('users.id', $id)
            ->get();

        $unit = Unit::all();
        $barang = Barang::all();
        // $total_unit = array();
        
        // foreach ($unit as $units) {

        // }
        
        $transaksi = DB::table('transaksi')
        ->join('unit', 'transaksi.lokasi_akhir', '=', 'unit.id')
        ->select('transaksi.*', 'unit.nama_unit')
        ->latest()
        ->get();
        // $transaksi_id = $request->input('transaksi_id');
        
        $history = DB::table('history')
            ->join('unit', 'history.lokasi_awal', '=', 'unit.id')
            // ->join('unit', 'history.lokasi_akhir', '=', 'unit.id')
            ->select('history.*', 'unit.nama_unit')
            ->where('history.kode_transaksi', $request->input('transaksi_id'))
            ->get();
            
        // dd($user);
        return view('product.home', compact('user', 'transaksi', 'history', 'unit', 'barang'));
    }

    public function fetchdetailhistory($id){
        $history = DB::table('history')
            ->join('unit', 'history.lokasi_awal', '=', 'unit.id')
            ->select('history.*', 'unit.nama_unit')
            ->where('history.kode_transaksi', $id)
            ->get();

        return response()->json($history);
    }
}
