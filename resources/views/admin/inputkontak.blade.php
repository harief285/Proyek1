@extends('layouts.mainadmin')
@section('content')
<!-- page content -->
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Kontak</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="" action="{{ route('save-kontak') }}"  method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">No. Urut <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="no_urut" type="text" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="nama" type="text" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kontak <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="kontak" type="text" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="keterangan" type="text" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-success">Reset</button>
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