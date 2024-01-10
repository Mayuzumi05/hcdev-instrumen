<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\DB;

class BarangExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('barang')
        ->join('unit', 'barang.lokasi', '=', 'unit.id')
        ->select('barang.*', 'unit.nama_unit')
        ->get();
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
            $barang->nama_unit,
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
