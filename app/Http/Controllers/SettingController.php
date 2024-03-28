<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        $unitwithoutadmin = DB::table('unit')
            ->where('id', '<', 8)
            ->get();

        // dd($userauth);
        return view('product.setting', compact('user', 'unit', 'unitwithoutadmin'));
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

    public function updatepassword(Request $request) {

        $request->validate([
            'current_password' => ['required','string','min:5'],
            'password' => ['required', 'string', 'min:5', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message','Password berhasil diperbarui');

        }else{

            return redirect()->back()->with('message','Current Password does not match with Old Password');
        }

    }
}
