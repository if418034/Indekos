@extends('layouts.layoutAdmin')

@section('title')
    <title>Kost</title>
@endsection
@section('main-content')



    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Kosan</h2>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header" style="text-align:right;">
                        <a href="{{url('/tambahKostAdmin')}}">Tambah Kost</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kost</th>
                                    <th>Nama Pemilik</th>
                                    <th>Harga</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $detail)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$detail->kosanNama}}</td>
                                        <td>{{$detail->userNama}}</td>
                                        <td>{{$detail->kosanHarga}}</td>
                                        <td>{{$detail->kosanAlamat}}</td>
                                        <td><a href="{{url('/editKost', $detail->kosanId)}}">Edit</a>
                                            <a href="{{url('/deleteKost', $detail->kosanId)}}">Hapus</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection
