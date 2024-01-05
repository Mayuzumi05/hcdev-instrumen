<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $barang = Barang::findOrFail($request->input('barang_id'));
        $row_id = rand(100,999);
        // dd($barang);

        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->add(array(
            'id' => $barang->id,
            'name' => $barang->nama_barang,
            'price' => 0,
            'quantity' => $request->input('quantity'),
            'attributes' => array(
                'material_number' => $barang->material_number,
                'deskripsi' => $barang->deskripsi,
                'lokasi' => $barang->lokasi,
            ),
            'associatedModel' => $barang
        ));
        
        return redirect('/barang')->with('message', 'Data berhasil ditambahkan');
    }

    public function delete(){
        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->clear();
        
        return redirect('/pindah');
    }

    public function update(){
        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->update(456, array(
            'name' => 'New Item Name', // new item name
        ));
        
        return redirect('/pindah');
    }
}
