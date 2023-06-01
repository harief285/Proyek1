<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{

    protected $fillable=[
        'id_barang',
        'id_user',
        'nama_barang',
        'harga_barang',
        'jumlah_barang',
        'id_kategori',
        'ukuran',
        'deskripsi',
        'alamat_gambar',
    ];
}
