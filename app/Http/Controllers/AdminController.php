<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_barang;
use App\Models\tbl_kategori;



class AdminController extends Controller
{

    public function index(){

        $barang = tbl_barang::with('kategori')->get();
        // return $barang;
        return view('admin.admin',compact('barang'));

        // $barang = AdminModel::allData();
        // return view('admin.admin',compact('barang'));
        // return DB::table('tbl_barangs')->join('tbl_kategori', 'tbl_barangs.id_kategori', "=" ,'tbl_kategori.id_kategori')->get();
    }
}
