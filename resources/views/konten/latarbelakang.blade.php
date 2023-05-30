@extends('konten.main')
@section('title',$title)
@section('content')
<h2>latar belakang</h2>

<h2>Nama:{{$latarbelakang}}</h2>

<ol>
@foreach ($datalatarbelakang as $item)
    <li> latarbelakang {{ $item['latarbelakang'] }} | | nama: {{ $item['nama'] }} </li>
@endforeach

@endsection

