@extends('layouts.layoutAdmin')

@section('title')
    <title>Edit Kost</title>
@endsection 
@section('main-content')
<div class="row">
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Kos</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Pemilik</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Kategori</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <label for="kategori"></label>
                                                <select name="kategori" id="kategori">
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                    <option value="gabung">Pria dan Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga(RP)</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
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
                                                <textarea required="" class="form-control"></textarea>
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