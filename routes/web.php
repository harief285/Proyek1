<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa3Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


route::get('/', function (){

    $title="user";
    $slug="home";
    $konten= "ini adalah websaya";
    return view('konten.user',compact('title', 'slug', 'konten'));
});

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
Route::get('/celana',[UserController::class,'celana']);



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
route::get('/logout', function (){

    $title="keluar";
    $slug="login";
    $konten= "ini adalah websaya";
    return view('konten.logout',compact('title', 'slug', 'konten'));
});



route::get('/whatsaap', function (){

    $title="kaos";
    $slug="whatsaap";
    $konten= "ini adalah websaya";
    return view('konten.whatsaap',compact('title', 'slug', 'konten'));
});


Route::get('/kaos',[UserController::class,'kaos']);


route::get('/logout', function (){

    $title="user";
    $slug="logout";
    $konten= "ini adalah websaya";
    return view('konten.logout',compact('title', 'slug', 'konten'));
});
route::get('/logout', function (){

    $title="user";
    $slug="login";
    $konten= "ini adalah websaya";
    return view('konten.logout',compact('title', 'slug', 'konten'));
});


route::get('/logout', function (){

    $title="keluar";
    $slug="login";
    $konten= "ini adalah websaya";
    return view('konten.logout',compact('title', 'slug', 'konten'));
});
route::get('/login', function (){

    $title="login";
    $slug="user";
    $konten= "ini adalah websaya";
    return view('konten.login',compact('title', 'slug', 'konten'));
});

route::get('/login', function (){

    $title="user";
    $slug="login";
    $konten= "ini adalah websaya";
    return view('konten.login',compact('title', 'slug', 'konten'));
});



route::get('/login', function (){

    $title="login";
    $slug="latarbelakang";
    $konten= "ini adalah websaya";
    return view('konten.login',compact('title', 'slug', 'konten'));
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
    Route::get('/admin/tampilbarang',[AdminController::class,'index'])->name('admin-tampilbarang');
    Route::get('/admin/inputbarang',[AdminController::class,'inputbarang'])->name('admin-tambahbarang');
    Route::POST('/admin/savebarang',[AdminController::class,'savebarang'])->name('admin-databarubarang');
    Route::get('/admin/editbarang/{id_barang}',[AdminController::class,'editbarang'])->name('admin-editbarang');
    Route::put('/admin/updatebarang/{id_barang}',[AdminController::class,'updatebarang'])->name('admin-updatebarang');
    Route::get('/admin/deletebarang/{id_barang}',[AdminController::class,'deletebarang'])->name('deletebarang');
    Route::get('/admin/kontak',[AdminController::class,'contact'])->name('kontak');
    Route::get('/admin/inputkontak',[AdminController::class,'inputkontak'])->name('input-kontak');
    Route::POST('/admin/savekontak',[AdminController::class,'savekontak'])->name('save-kontak');
    Route::get('/admin/deletekontak/{no_urut}',[AdminController::class,'deletekontak'])->name('delete-kontak');
    Route::get('/logout', [AdminController::class,'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AdminController::class,'loginform'])->name('login-form');
    Route::POST('/login',[AdminController::class,'login'])->name('login');
});

