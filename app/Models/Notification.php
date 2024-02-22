<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = "notification";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_tipe',
        'id_pengirim',
        'id_unit_pengirim',
        'id_penerima',
        'id_unit_penerima',
        'id_transaksi',
        'is_read',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
