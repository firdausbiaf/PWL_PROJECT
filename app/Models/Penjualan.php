<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan'; 

    protected $fillable = [
        'kode_pelanggan',
        'kode_barang',
        'tanggal',
        'jumlah',
        'status',
    ];
}
