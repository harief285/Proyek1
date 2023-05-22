<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa3Controller extends Controller
{
    
    public function index(){
        $mhs="kelompok 6";
        $title="straightface.com";
        $slug="straightface";
    
return view('konten.mahasiswa',compact('mhs','title', 'slug',));




    }

}


