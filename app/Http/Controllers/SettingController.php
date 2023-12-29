<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting(){
        $id = auth()->user()->id;
        $user = DB::table('users')
            ->join('unit', 'users.unit_bagian', '=', 'unit.id')
            ->select('users.*', 'unit.nama_unit')
            ->where('users.id', $id)
            ->get();
            
        $unit = Unit::all();

        // dd($userauth);
        return view('product.setting', compact('user', 'unit'));
    }

    public function update(Request $request, $id){
        
        User::where('id', $id)
            ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'NIK' => $request->NIK,
                    'no_telepon' => $request->no_telepon,
                    'email' => $request->email,
                    'unit_bagian' => $request->unit_bagian,
                    'username' => $request->username,
                ]);
        
        return redirect('/setting')->with('success', 'Data Berhasil Diubah');
    }
}
