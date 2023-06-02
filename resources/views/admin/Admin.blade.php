@extends('layouts.mainadmin')
@section('content')
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Ukuran</th>
            <th>Deskripsi</th>
        </tr>
        @foreach($barang as $item)
        <tr>
            <td>{{ $item['id_barang'] }}</td>
            <td>{{ $item['nama_barang'] }}</td>
            <td>{{ $item['jumlah_barang'] }}</td>
            <td>{{ $item['ukuran'] }}</td>
            <td>{{ $item['deskripsi'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection
