@extends('layouts.mainuser')
@section('content')
<head>
    <title>Toko Kami - Jual Berbagai Macam Produk Berkualitas</title>
</head>
<body>
    <header>
        <h1>Toko Kami</h1>
        
    </header>
    <main>
        <section id="beranda">
            <h2>Selamat datang di toko kami!</h2>
            <p>Kami menjual berbagai macam produk berkualitas dengan harga yang terjangkau. Anda bisa menemukan produk-produk terbaru kami di halaman produk.</p>
        </section>
        <section id="produk">
            <h2>Produk</h2>
            <div class="produk">
                <img src="background7.jpeg"width="200" height="200" alt="celana"><a href="{{asset('background7.jpeg ')}}">
                <h3>celana</h3>
                <p>Rp 160.000</p>
                <a href="whatsaap">Pesan Sekarang</a>
            </div>
            <div class="produk">
                <img src="background8.jpeg" width="200" height="200" alt="celana">
                <a href="{{asset('background8.jpeg ')}}">
                <h3>celana</h3>
                <p>Rp 160.000</p>
                <a href="whatsaap">Pesan Sekarang</a>
            </div>
            <div class="produk">
                <img src="background16.jpeg" width="200" height="200" alt="celana"><a href="{{asset('background16.jpeg ')}}">
                <h3>celana</h3>
                <p>Rp 160.000</p>
                <a href="whatsaap">Pesan Sekarang</a>
            </div>
        </section>
@endsection