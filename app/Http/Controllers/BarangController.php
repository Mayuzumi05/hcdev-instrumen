<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Exports\BarangExport;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function index(){
        $barang = array(
            'title'     =>  'Data Barang',
            'barang'    =>  Barang::latest()->paginate(2),
        );
        return view('product.barang', $barang);
    }

    public function store(Request $request) {

        Barang::create([
            'material_number' => $request->material_number,
            'nama_barang' => $request->nama_barang,
            'range_pengukuran' => $request->range_pengukuran,
            'satuan_pengukuran' => $request->satuan_pengukuran,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'jumlah_barang' => $request->jumlah_barang,
            'id_satuan_barang' => $request->id_satuan_barang,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('/barang')->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id){
        
        Barang::where('id', $id)
            ->where('id', $id)
                ->update([
                    'material_number' => $request->material_number,
                    'nama_barang' => $request->nama_barang,
                    'range_pengukuran' => $request->range_pengukuran,
                    'satuan_pengukuran' => $request->satuan_pengukuran,
                    'deskripsi' => $request->deskripsi,
                    'kondisi' => $request->kondisi,
                    'merk' => $request->merk,
                    'tipe' => $request->tipe,
                    'jumlah_barang' => $request->jumlah_barang,
                    'id_satuan_barang' => $request->id_satuan_barang,
                    'lokasi' => $request->lokasi,
                ]);
        
        return redirect('/barang')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id) {
        
        Barang::where('id', $id)->delete();

        return redirect('/barang')->with('success', 'Data berhasil dihapus');

    }

    public function barangExport(){
        return Excel::download(new BarangExport, 'barang.xlsx');
    }
}
