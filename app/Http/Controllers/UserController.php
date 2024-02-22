<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Unit;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $user = User::all();
        $id = auth()->user()->id;

        $user = DB::table('users')
            ->join('unit', 'users.unit_bagian', '=', 'unit.id')
            ->select('users.*', 'unit.nama_unit')
            ->get();
        
        $userwithid = DB::table('users')
        ->join('unit', 'users.unit_bagian', '=', 'unit.id')
        ->select('users.*', 'unit.nama_unit')
        ->where('users.id', $id)
        ->get();

        return view('product.user', compact('user', 'userwithid'));
    }

    public function userwithid(){
        $id = auth()->user()->id;
        $user = DB::table('users')
            ->join('unit', 'users.unit_bagian', '=', 'unit.id')
            ->select('users.*', 'unit.nama_unit')
            ->where('users.id', $id)
            ->get();
            
        // dd($user);
        return view('product.home', compact('user'));
    }

    public function register() {

        $unit = Unit::all();

        return view('user.register', compact('unit'));        
    }

    public function saveregister(Request $request) {

        $data_user = User::create([
            'name' => $request->name,
            'NIK' => $request->NIK,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'unit_bagian' => $request->unit_bagian,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => 1,
            'remember_token' => Str::random(60),
        ]);

        // dd($data_user);

        Notification::create([
            'id_tipe' => 3,
            'id_pengirim' => $data_user->id,
            'id_unit_pengirim' => $data_user->unit_bagian,
            'id_penerima' => 1,
            'id_unit_penerima' => 8,
            'id_transaksi' => 1,
            'is_read' => 0,
        ]);

        return redirect('/login')->with('success', 'Data berhasil disimpan');
    }

    public function updatestatus(Request $request, $id){
        
        User::where('id', $id)
            ->where('id', $id)
                ->update([
                    'status' => 0,
                ]);
        
        Notification::where('id_pengirim', $id)
            ->where('id_pengirim', $id)
                ->update([
                    'id_transaksi' => 0,
                ]);
        
        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }

    public function rejectstatus(Request $request, $id){
        
        User::where('id', $id)
            ->where('id', $id)
                ->update([
                    'status' => 2,
                ]);
        
        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id) {
        
        User::where('id', $id)->delete();

        return redirect('/user')->with('success', 'Data berhasil dihapus');

    }
}
