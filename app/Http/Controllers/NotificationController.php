<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        // $user = User::all();
        $id = auth()->user()->id;
        
        $userwithid = DB::table('users')
        ->join('unit', 'users.unit_bagian', '=', 'unit.id')
        ->select('users.*', 'unit.nama_unit')
        ->where('users.id', $id)
        ->get();

        $notification = DB::table('notification')
        ->join('users', 'notification.id_pengirim', '=', 'users.id')
        ->join('unit', 'notification.id_unit_pengirim', '=', 'unit.id')
        ->select('notification.*', 'users.name', 'unit.nama_unit')
        ->where('notification.id_penerima', $id)
        ->get();

        // dd($notification);

        return view('product.notification', compact('userwithid', 'notification'));
    }

    public function changestatus($id) {
        Notification::where('id', $id)
            ->where('id', $id)
                ->update([
                    'is_read' => 1,
                ]);
    }
}
