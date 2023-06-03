@extends('layouts.mainadmin')
@section('content')
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jumlah Barang</th>
            <th>Ukuran</th>
            <th>Deskripsi</th>
            <th><a href="" class="btn btn-sm btn-primary"><span class="fa fa-plus-square"></span></a></th>
        </tr>
        <?php $no=1; ?>
        @foreach($barang as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->id_barang }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->kategori->kategori }}</td>
            <td>{{ $item->jumlah_barang }}</td>
            <td>{{ $item->ukuran }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <a href="index.php?page=admin&action=edit&id=<?=$item['id_barang'];?>"
                class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="index.php?page=admin&action=reset&id=<?=$item['id_barang'];?>"
                class="btn btn-sm btn-default"><span class="glyphicon glyphicon-refresh"></span></a>
                <a href="index.php?page=admin&action=hapus&id=<?=$item['id_barang'];?>"
                class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
