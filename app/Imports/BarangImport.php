<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class BarangImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        return new Barang([
            //
            'material_number' => $row['Material Number'],
            'nama_barang' => $row['Nama Barang'],
            'range_pengukuran' => $row['Range Pengukuran'],
            'satuan_pengukuran' => $row['Satuan Pengukuran'],
            'deskripsi' => $row['Deskripsi'],
            'kondisi' => $row['Kondisi'],
            'merk' => $row['Merk'],
            'tipe' => $row['Tipe'],
            'jumlah_barang' => $row['Jumlah Barang'],
            'id_satuan_barang' => $row['Satuan'],
            'lokasi' => auth()->user()->unit_bagian,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
