@extends('layouts.layoutAdmin')

@section('title')
    <title>Tambah Kost</title>
@endsection
@section('main-content')
<div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Tambah Kos</h5>
                                <div class="card-body">
                                    <form id="validationform" method="post" enctype="multipart/form-data" action="{{url('/postTambahKost')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pemilik</label>
                                            <select name="user_id" id="user_id">
                                                @foreach($owners as $owner)
                                                    <option value="{{$owner->id}}">{{$owner->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Kosan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="nama" id="nama" data-parsley-maxlength="6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori</label>
                                            <div class="col-sm-8 col-lg-6">
                                                <select name="kategori" name="kategori" id="kategori">
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                    <option value="gabung">Pria dan Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga(RP)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="harga" id="harga" data-parsley-maxlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" name="alamat" id="alamat" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Foto</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" name="foto" id="foto">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Deskripsi</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" name="deskripsi" id="deskripsi"class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Jumlah</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" id="jumlah "name="jumlah" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                                <button type="submit "class="btn btn-space btn-primary">Tambah</button>
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
