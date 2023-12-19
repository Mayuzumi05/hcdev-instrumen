<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
    }

    public function headings(): array
    {
        return [
            'material_number' => $row[1],
            'nama_barang' => $row[2],
            'range_pengukuran' => $row[3],
            'satuan_pengukuran' => $row[4],
            'deskripsi' => $row[5],
            'kondisi' => $row[6],
            'merk' => $row[7],
            'tipe' => $row[8],
            'jumlah Barang' => $row[9],
            'id_satuan_barang' => $row[10],
            'lokasi' => $row[11],
            'created_at' => $row[12],
            'updated_at' => $row[13],
        ];
    }
}
