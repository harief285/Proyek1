<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tbl_barang extends Model
{
    use HasFactory;

    protected $table = 'tbl_barang';

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

    public function kategori(){
        return $this->belongsTo(tbl_kategori::class, 'id_kategori' , 'id_kategori');
    }
}
