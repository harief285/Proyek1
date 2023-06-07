@extends('layouts.mainadmin')
@section('content')
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Keterangan</th>
            <th><a href="{{ route('input-kontak') }}" class="btn btn-sm btn-primary"><span class="fa fa-plus-square"></span></a></th>
        </tr>
        @foreach($kontak as $item)
        <tr>
            <td>{{ $item->no_urut }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kontak }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
                <a href="{{ route('delete-kontak', ['no_urut' => $item->no_urut]) }}"
                class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
