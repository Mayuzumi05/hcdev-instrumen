<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = "unit";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_barang',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function user(){
        return $this->hasMany(User::class);
    }
    
    public function barang(): HasMany
    {
        return $this->hasMany(Barang::class);
    }
}
