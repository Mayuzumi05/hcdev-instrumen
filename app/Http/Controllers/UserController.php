<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('product.user', compact('user'));
    }

    public function saveregister(Request $request) {

        User::create([
            'name' => $request->name,
            'NIK' => $request->NIK,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'unit_bagian' => $request->unit_bagian,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login')->with('success', 'Data berhasil disimpan');
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

    // public function update(Request $request, $id) {
        
    //     User::where('id', $id)->where('id', $id)->update([
    //         'name' => $request->name,
    //         'NIK' => $request->NIK,
    //         'no_telepon' => $request->no_telepon,
    //         'email' => $request->email,
    //         'unit_bagian' => $request->unit_bagian,
    //         'username' => $request->username,
    //     ]);

    //     return redirect('/setting')->with('success', 'Data berhasil diubah');

    // }

    public function destroy($id) {
        
        User::where('id', $id)->delete();

        return redirect('/user')->with('success', 'Data berhasil dihapus');

    }
}
