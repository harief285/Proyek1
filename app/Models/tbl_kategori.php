<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class tbl_kategori extends Model
{
    use HasFactory;

    protected $table='tbl_kategori';

    protected $fillable = [
        'id_kategori',
        'kategori',
    ];

    public function barang(){
        return $this->hasMany(tbl_barang::class, 'id_kategori' , 'id_kategori');
    }
}