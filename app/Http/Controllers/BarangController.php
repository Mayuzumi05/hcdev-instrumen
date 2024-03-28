<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Unit;
use App\Exports\BarangExport;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function index(Request $request){
        // $barang = Barang::with('unit')->latest()->paginate(5);
        $id = auth()->user()->id;

        $lokasi = $request->lokasi;
        
        $query = DB::table('barang')
            ->join('unit', 'barang.lokasi', '=', 'unit.id')
            ->select('barang.*', 'unit.nama_unit');

        if(isset($request->lokasi) && ($request->lokasi != null)) {
            $query->where('lokasi', 'LIKE', $request->lokasi);
        }

        if(isset($request->name) && ($request->name != null)) {
            $query->where('nama_barang', 'LIKE', $request->name)
                ->orWhere('deskripsi', 'LIKE', $request->name)
                ->orWhere('material_number', 'LIKE', $request->name);
        }

        $barang = $query->latest()
        ->paginate(10);

        $user = DB::table('users')
            ->join('unit', 'users.unit_bagian', '=', 'unit.id')
            ->select('users.*', 'unit.nama_unit')
            ->where('users.id', $id)
            ->get();

        $unit = DB::table('unit')
            ->where('id', '<', 8)
            ->get();

        // $barang->when($request->lokasi, function ($query) use ($request){
        //     return $query->where('lokasi', 'like', '%'.$request->lokasi.'%');
        // });
        
        return view('product.barang', compact('barang', 'user', 'unit', 'lokasi'));
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
            'lokasi' => auth()->user()->unit_bagian,
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

    public function barangImport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataBarang', $namaFile);

        Excel::import(new BarangImport, public_path('/DataBarang/'.$namaFile));
        return redirect('/barang')->with('success', 'Data berhasil dihapus');
    }
}
