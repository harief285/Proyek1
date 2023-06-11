<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_contact';
    protected $primaryKey = 'no_urut';
    public $incrementing = false;

    protected $fillable=[
        'no_urut',
        'nama',
        'kontak',
        'keterangan',
    ];
}
