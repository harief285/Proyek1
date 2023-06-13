@extends('layouts.mainuser')
@section('content')
            <h1>Toko Kami</h1>
            <section id="beranda">
                <h2>Selamat datang di toko kami!</h2>
                <p>Kami menjual berbagai macam produk berkualitas dengan harga yang terjangkau. Anda bisa menemukan produk-produk terbaru kami di halaman produk.</p>
            </section>
            <section id="produk">
                <h2>Produk</h2>
                @foreach($barang as $item)
                <div class="produk">
                    <img src="{{ asset('fotobarang/'.$item->alamat_gambar) }}"width="200" height="200" alt="kaos"><a href="{{ asset('fotobarang/'.$item->alamat_gambar) }}">
                    
                    <h3>{{ $item->nama_barang }}</h3>
                    <p>Rp {{ $item->harga_barang }}</p>
                    <a href="whatsaap">Pesan Sekarang</a>
                </div>
                @endforeach
            </section>
            @endsection