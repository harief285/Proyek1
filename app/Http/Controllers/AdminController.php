<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_barang;
use App\Models\tbl_kategori;
use Illuminate\Support\Facades\File;



class AdminController extends Controller
{

    public function index(){

        $barang = tbl_barang::with('kategori')->get();

        return view('admin.admin',compact('barang'));
    }

    public function inputbarang(){
        $kategori = tbl_kategori::all();
        return view('admin.inputbarang',compact('kategori'));
    }

    public function savebarang(Request $request){

        // dd($request);

        if($request->hasFile('alamat_gambar')){
            $extension = $request->file('alamat_gambar')->getClientOriginalExtension();
            $new_name = uniqid() .".". $extension;

            // $request->file('alamat_gambar')->move('fotobarang/', $request->file('alamat_gambar')->getClientOriginalName());
            $request->file('alamat_gambar')->move('fotobarang/', $new_name);
            // dd($request);
            // $alamat_gambar = $request->file('alamat_gambar')->getClientOriginalName();
            // $barang->save();
            tbl_barang::create(
                array_merge($request->except('_token'), ['alamat_gambar' => urlencode($new_name)])
            );
        }
        return redirect()->route('admin')->with('success','data berhasil ditambahkan');
    }

    public function editbarang($id_barang){
        $barang = tbl_barang::join('tbl_kategori', 'tbl_barang.id_kategori', '=', 'tbl_kategori.id_kategori')
                ->where('tbl_barang.id_barang', $id_barang)
                ->firstOrFail();

        
        $kategori = tbl_kategori::all();

        return view('admin.editbarang',compact('barang','kategori'));
    }

    public function updatebarang(Request $request, $id_barang){
        $barang = tbl_barang::where('id_barang', $id_barang)->firstOrFail();

        if (!$barang) {
            // Handle jika data barang tidak ditemukan
            return redirect()->back()->with('error', 'Data barang tidak ditemukan');
        }

        // Perbarui kolom-kolom pada tabel tbl_barang
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->id_kategori = $request->id_kategori;
        $barang->ukuran = $request->ukuran;
        $barang->deskripsi = $request->deskripsi;

        if ($request->hasFile('alamat_gambar')) {
            $loaksi = 'fotobarang/'.$barang->alamat_gambar;
            if (File::exists($loaksi)) {
                File::delete($loaksi);
            }
            $extension = $request->file('alamat_gambar')->getClientOriginalExtension();
            $new_name = uniqid() .".". $extension;
            $request->file('alamat_gambar')->move('fotobarang/', $new_name);

            $barang->alamat_gambar = $new_name;
        }

        $barang->save();

        return redirect()->route('admin')->with('success', 'Data barang berhasil diperbarui');
    }
    public function deletebarang($id_barang)
    {
        $barang = tbl_barang::find($id_barang);

        if (!$barang) {
            return redirect()->back()->with('error', 'Data barang tidak ditemukan');
        }

        $fotoBarang = $barang->alamat_gambar;

        if (!empty($fotoBarang)) {
            $loksi = 'fotobarang/' . $fotoBarang;
            if (File::exists($loksi)) {
                File::delete($loksi);
            }
        }

        $barang->delete();

        return redirect()->route('admin')->with('success', 'Data barang berhasil dihapus');
    }

}
