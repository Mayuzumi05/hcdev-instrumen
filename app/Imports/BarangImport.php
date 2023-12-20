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
            'material_number' => $row['(CONTOH)1234567'],
            'nama_barang' => $row['Differential Pressure Transmitter'],
            'range_pengukuran' => $row['0-400'],
            'satuan_pengukuran' => $row['MMH2O'],
            'deskripsi' => $row['DIFFERENTIAL PRESSURE TRANSMITTER 0-400 MMH2O'],
            'kondisi' => $row['Baru/Bekas'],
            'merk' => $row['Yokogawa'],
            'tipe' => $row['EJA110E'],
            'jumlah_barang' => $row['1'],
            'id_satuan_barang' => $row['1'],
            'lokasi' => $row['3'],
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
