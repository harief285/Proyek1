<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa3Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/mahasiswa ',[mahasiswa3Controller::class,'index']);

route::get('/home', function (){

    $title="websaya";
    $namakelompok="kelompok";
    $konten= "ini adalah websaya";
    return view('konten.mahasiswa',compact('title', 'namakelompok', 'konten'));
    
    
    
    });
    