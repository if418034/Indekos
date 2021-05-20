@extends('layouts.layoutAdmin')

@section('title')
    <title>Tambah Pemilik</title>
@endsection
@section('main-content')
<div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Tambah Pemilik</h5>
                                <div class="card-body">
                                    <form id="validationform" method="post" enctype="multipart/form-data" action="{{url('/postTambahPemilikKost')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pemilik</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="nama" id="nama" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="alamat" id="alamat" data-parsley-maxlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">No Tlp</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="telepon" id="telepon" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  name="email" id="email" class="form-control"></input>
                                            </div>
                                        </div>

                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
@endsection
