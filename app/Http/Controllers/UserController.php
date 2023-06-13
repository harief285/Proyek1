<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_barang;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function kaos(){
        $barang = tbl_barang::where('id_kategori', '1')->get();
        return view('konten.kaos',compact('barang'));
    }

    public function celana(){
        $barang = tbl_barang::where('id_kategori', '2')->get();
        return view('konten.celana',compact('barang'));
    }
}
