<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class BarangExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
        // return [
        //     (new Barang)->except('id'),
        // ];
    }

    public function map($barang): array
    {
        return [
            $barang->material_number,
            $barang->nama_barang,
            $barang->range_pengukuran,
            $barang->satuan_pengukuran,
            $barang->deskripsi,
            $barang->kondisi,
            $barang->merk,
            $barang->tipe,
            $barang->jumlah_barang,
            $barang->id_satuan_barang,
            $barang->lokasi,
        ];
    }

    public function headings(): array
    {
        return [
            // 'No.',
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
        ];
    }
}
