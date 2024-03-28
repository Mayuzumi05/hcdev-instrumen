<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use FilterableByDates;

class HistoryController extends Controller
{
    public function index(Request $request){
        $id = auth()->user()->id;
        $lokasi = $request->lokasi;
        
        $userwithid = DB::table('users')
        ->join('unit', 'users.unit_bagian', '=', 'unit.id')
        ->select('users.*', 'unit.nama_unit')
        ->where('users.id', $id)
        ->get();

        $query = DB::table('transaksi')
            ->join('unit', 'transaksi.lokasi_akhir', '=', 'unit.id')
            ->select('transaksi.*', 'unit.nama_unit');

        if(isset($request->lokasi) && ($request->lokasi != null)) {
            $query->where('lokasi_akhir', 'LIKE', $request->lokasi);
        }

        if(isset($request->tanggal_awal) && ($request->tanggal_awal != null)) {
            $query->whereDate('transaksi.created_at','>=',$request->tanggal_awal);
        }

        if(isset($request->tanggal_akhir) && ($request->tanggal_akhir != null)) {
            $query->whereDate('transaksi.created_at','<=',$request->tanggal_akhir);
        }

        $transaksi = $query->latest()
        ->paginate(20)->withQueryString();

        $unit = DB::table('unit')
            ->where('id', '<', 8)
            ->get();

        return view('product.history', compact('userwithid', 'transaksi', 'unit', 'lokasi'));
    }

    public function fetchdetailhistory($id){
        $history = DB::table('history')
            ->join('unit', 'history.lokasi_awal', '=', 'unit.id')
            ->select('history.*', 'unit.nama_unit')
            ->where('history.kode_transaksi', $id)
            ->get();

        // return response()->json([
        //     'history'=>$history,
        // ]);

        return response()->json($history);
    }
}
