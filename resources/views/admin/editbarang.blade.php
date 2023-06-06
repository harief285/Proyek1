@extends('layouts.mainadmin')
@section('content')
<!-- page content -->
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Input Barang</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="" action="{{ url('admin/updatebarang',$barang->id_barang) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Barang<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="id_barang" required="required" value="{{$barang->id_barang}}" readonly />
                                </div>
                            </div>
                            
                            <input class="form-control" class='optional' name="id_user" type="hidden" value="admin" >
                            
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="nama_barang" type="text" value="{{$barang->nama_barang}}" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Barang<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="harga_barang" class='number' required="required" type="number" value="{{$barang->harga_barang}}" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" class='number' name="jumlah_barang" required='required' value="{{$barang->jumlah_barang}}" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="id_kategori" required="required">
                                        <option value="{{ $barang->id_kategori }}">{{ $barang->id_kategori }}.{{ $barang->kategori }}</option>
                                        @foreach($kategori as $k)
                                            @if($k->id_kategori != $barang->id_kategori)
                                                <option value="{{ $k->id_kategori }}">{{ $k->id_kategori }}.{{ $k->kategori }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Ukuran<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' type="text" name="ukuran" required='required' value="{{$barang->ukuran}}"></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Deskripsi<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' type="text" name="deskripsi" required='required' value="{{$barang->deskripsi}}"></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Gambar<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="alamat_gambar" type="file" />
                                    <img src="{{ asset('fotobarang/'.$barang->alamat_gambar)}}" widht="70px" alt="img"></div>
                                    
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Update Barang</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /page content -->
@endsection