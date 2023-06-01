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

route::get('/user', function (){

    $title="user";
    $slug="home";
    $konten= "ini adalah websaya";
    return view('konten.user',compact('title', 'slug', 'konten'));
});

route::get('/latarbelakang', function (){
    $title="user";
    $slug="latarbelakang";
    $konten= "ini adalah websaya";
    return view('konten.latarbelakang',compact('title', 'slug', 'konten'));
});


route::get('/visimisi', function (){
    $title="user";
    $slug="visimisi";
    $konten= "ini adalah websaya";
    return view('konten.visimisi',compact('title', 'slug', 'konten'));
});
route::get('/celana', function (){
    $title="user";
    $slug="celana";
    $konten= "ini adalah websaya";
    return view('konten.celana',compact('title', 'slug', 'konten'));
});

route::get('/kaos', function (){
    $title="user";
    $slug="kaos";
    $konten= "ini adalah websaya";
    return view('konten.kaos',compact('title', 'slug', 'konten'));
});


route::get('/whatsaap', function (){
    $title="user";
    $slug="whatsaap";
    $konten= "ini adalah websaya";
    return view('konten.whatsaap',compact('title', 'slug', 'konten'));
});


route::get('/instragram', function (){
    $title="user";
    $slug="instragram";
    $konten= "ini adalah websaya";
    return view('konten.instragram',compact('title', 'slug', 'konten'));
});


route::get('/size', function (){
    $title="user";
    $slug="size";
    $konten= "ini adalah websaya";
    return view('konten.size',compact('title', 'slug', 'konten'));
});


route::get('/home', function (){

    $title="home";
    $slug="home";
    $konten= "ini adalah websaya";
    return view('konten.home',compact('title', 'slug', 'konten'));
});



route::get('/keluar', function (){

    $title="user";
    $slug="keluar";
    $konten= "ini adalah websaya";
    return view('konten.keluar',compact('title', 'slug', 'konten'));
});



route::get('/logut', function (){

    $title="user";
    $slug="logout";
    $konten= "ini adalah websaya";
    return view('konten.logout',compact('title', 'slug', 'konten'));
});


Route::get('/admin',[AdminController::class,'index']);