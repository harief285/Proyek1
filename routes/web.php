<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa3Controller;
use App\Http\Controllers\AdminController;
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



// Route::get('/mahasiswa ',[mahasiswa3Controller::class,'index']);

// route::get('/admin', function (){

//     $title="Admin";
//     $slug="home";
//     $konten= "ini adalah websaya";
//     return view('konten.admin',compact('title', 'slug', 'konten'));
// });

Route::get('/admin',[AdminController::class,'index']);