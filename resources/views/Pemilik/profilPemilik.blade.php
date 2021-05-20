@extends('layouts.layoutPemilik')

@section('title')
    <title>Profil</title>
@endsection

@section('main-content')

    <br><br><br>
    <div class="container-fuild">
        <div class="circular--portrait" style="padding:2%;margin-left:43%;">
            <img src="/img/account.png" />
        </div>
            <i><h3 style="text-align:center;">Nama Lengkap Pengunjung</h3></i><br>
        <div class="col-md-12">
            <h4>Data Diri</h4>
            <hr>
            <div class="row" style="padding:%;background:;">
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">Kode Kost/Lokasi</span>
                </div>
                <div class="col-md-8" style="padding:1%;text-align:left;">
                    <span style="padding:1%;">Kost-02/Balige</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style=";padding:2%;">Nama</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">Jessica Siburian</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">Alamat</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">Balige</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">No Telepon</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">0821-7843-0023</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">Email</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">jessica02@gmail.com</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">Username</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">Jessica02</span>
                </div>
                <div class="col-md-4" style="padding:1%;text-align:left;">
                    <span style="padding:2%;">Password</span>
                </div>
                <div class="col-md-8">
                    <span style="padding:1%;">******</span>
                </div>
                <div class="col-md-12" style="padding:1%;text-align:left;">
                    <input type="reset" value="Ubah">
                </div>

            </div>
        </div>

    </div>
    
   

@endsection