<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_barang;

class AdminController extends Controller
{
    public function index(){
        $barang = tbl_barang::all();
        return view('admin.Admin',compact('barang'));
    }
}
