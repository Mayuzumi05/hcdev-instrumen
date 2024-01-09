<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\History;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $barang = DB::table('barang')
            ->join('unit', 'barang.lokasi', '=', 'unit.id')
            ->select('barang.*', 'unit.nama_unit')
            ->where('barang.id', $request->input('barang_id'))
            ->first();
        // $row_id = rand(100,999);
        // dd($barang);

        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->add(array(
            'id' => $barang->id,
            'name' => $barang->nama_barang,
            'price' => 0,
            'quantity' => $request->input('quantity'),
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
        $id = auth()->user()->id; // or any string represents user identifier
        $lokasi = auth()->user()->id;
        $keranjang = \Cart::session($id)->getContent('id');

        $kode_transaksi = Transaksi::create([
            'jumlah_barang' => $keranjang->count(),
            'lokasi_akhir' => auth()->user()->unit_bagian,
        ]);

        foreach ($keranjang as $item) {
            Barang::create([
                'material_number' => $item->associatedModel->material_number,
                'nama_barang' => $item->associatedModel->nama_barang,
                'range_pengukuran' => $item->associatedModel->range_pengukuran,
                'satuan_pengukuran' => $item->associatedModel->satuan_pengukuran,
                'deskripsi' => $item->associatedModel->deskripsi,
                'kondisi' => $item->associatedModel->kondisi,
                'merk' => $item->associatedModel->merk,
                'tipe' => $item->associatedModel->tipe,
                'jumlah_barang' => $item->quantity,
                'id_satuan_barang' => $item->associatedModel->id_satuan_barang,
                'lokasi' => auth()->user()->unit_bagian,
            ]);

            Barang::where('id', $item->id)
            ->where('id', $item->id)
                ->update([
                    'jumlah_barang' => $item->associatedModel->jumlah_barang - $item->quantity,
                ]);

            History::create([
                'material_number' => $item->associatedModel->material_number,
                'nama_barang' => $item->associatedModel->nama_barang,
                'range_pengukuran' => $item->associatedModel->range_pengukuran,
                'satuan_pengukuran' => $item->associatedModel->satuan_pengukuran,
                'deskripsi' => $item->associatedModel->deskripsi,
                'kondisi' => $item->associatedModel->kondisi,
                'merk' => $item->associatedModel->merk,
                'tipe' => $item->associatedModel->tipe,
                'jumlah_barang' => $item->quantity,
                'id_satuan_barang' => $item->associatedModel->id_satuan_barang,
                'lokasi_awal' => $item->associatedModel->lokasi,
                'lokasi_akhir' => auth()->user()->unit_bagian,
                'kode_transaksi' => $kode_transaksi->id,
            ]);
        }

        \Cart::session($id)->clear();
        
        return redirect('/pindah');
    }
}