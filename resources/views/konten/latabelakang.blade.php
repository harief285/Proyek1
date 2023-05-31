@extends('konten.main')
@section('konten',$title)
@section('content')
<h2>profil</h2>

<h2>Nama:{{$profil}}</h2>




<ol>
@foreach ($dataprofil as $item)
    <li> prodi {{ $item['produk'] }} | | nama: {{ $item['nama'] }} </li>
@endforeach

@endsection

