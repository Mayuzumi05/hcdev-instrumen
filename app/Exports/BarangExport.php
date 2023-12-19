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
            'No.',
            'Material Number',
            'Nama Barang',
            'Range Pengukuran',
            'Satuan Pengukuran',
            'Deskripsi',
            'Kondisi',
            'Merk',
            'Tipe',
            'Jumlah Barang',
            'ID Satuan Barang',
            'Lokasi',
            'Created At',
            'Updated At',
        ];
    }
}
