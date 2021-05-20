@extends('layouts.layoutPemilik')

@section('title')
    <title>Booking</title>
@endsection

@section('main-content')

    <br><br><br>
    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
		<div class="category-block">
			<div class="header">
                <i class="fa fa-briefcase icon-bg-5"></i>
				<h4>Kamar 001</h4>
			</div>
			<ul class="category-list" >
                <li><a href="#">Rinaldy <span>16 maret 2020</span> <span>Expired pada</span></a></li>
			</ul>
		</div>
	</div>
    <div class="col-md-12">
        <h3 style="margin-left:-3%;padding:2%;">Keluhan</h3>
    </div>
    <div class="col-md-12">
        <h3 style="margin-left:-3%;padding:2%;">Komentar</h3>
        <h6 style="margin-left:-1%;">Berikan komentar atau pesan kepada pengguna kost</h6>
    </div>
    <div class="col-md-12" style="background:#007BFF;padding:1%;">
        <div class="row">
            <div class="col-md-7">
                <textarea style="width:100%;height:90%;" rows="5"></textarea>
                <input type="submit" value="Kirim"/>
                <input type="reset" value="Hapus">
            </div>
            <div class="col-md-5">
                <img src="/img/kost_1.jpg" alt="" style="width:100%;">
            </div>
        </div>
    </div><br>
    
   

@endsection