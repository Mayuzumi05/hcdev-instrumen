<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = [
        'jumlah_barang',
        'lokasi_akhir',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
