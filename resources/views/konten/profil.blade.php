@extends('layouts.main')
@section('title',$title)
@section('content')
<h2>profil</h2>

<h2>Nama:{{$profil}}</h2>

<ol>
@foreach ($dataprofil as $item)
    <li> prodi {{ $item['prodi'] }} | | nama: {{ $item['nama'] }} </li>
@endforeach

@endsection

