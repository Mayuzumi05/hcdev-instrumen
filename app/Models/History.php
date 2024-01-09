<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = "history";
    protected $primaryKey = "id";
    protected $fillable = [
        'material_number',
        'nama_barang',
        'range_pengukuran',
        'satuan_pengukuran',
        'deskripsi',
        'kondisi',
        'merk',
        'tipe',
        'jumlah_barang',
        'id_satuan_barang',
        'lokasi_awal',
        'lokasi_akhir',
        'kode_transaksi',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
