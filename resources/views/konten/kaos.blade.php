@extends('layouts.mainuser')
@section('content')
            <h1>Toko Kami</h1>
            <section id="beranda">
                <h2>Selamat datang di toko kami!</h2>
                <p>Kami menjual berbagai macam produk berkualitas dengan harga yang terjangkau. Anda bisa menemukan produk-produk terbaru kami di halaman produk.</p>
            </section>
            <section id="produk">
                <h2>Produk</h2>
                <div class="produk">
                    <img src="background11.jpeg"width="200" height="200" alt="kaos"><a href="{{asset('background11.jpeg ')}}">
                    
                    <h3>kaos</h3>
                    <p>Rp 200.000</p>
                    <a href="whatsaap">Pesan Sekarang</a>
                </div>
                <div class="produk">
                    <img src="background12.jpeg" width="200" height="200" alt="kaos"><a href="{{asset('background12.jpeg ')}}">
                    <h3>kaos</h3>
                    <p>Rp 300.000</p>
                    <a href="whatsaap">Pesan Sekarang</a>
                </div>
                <div class="produk">
                    <img src="background16.jpeg" width="200" height="200" alt="kaos">
                    <a href="{{asset('background16.jpeg ')}}">
                    <h3>kaos</h3>
                    <p>Rp 400.000</p>
                    <a href="whatsaap">Pesan Sekarang</a>
                </div>
            </section>
            @endsection