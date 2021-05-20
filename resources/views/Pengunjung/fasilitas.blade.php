@extends('layouts.layoutPengunjung')

@section('title')
    <title>Pemilik Kost</title>
@endsection

@section('main-content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="popular-deals section">
	<div class="container">
            <div class="row">
                <div class="card">

                </div>
            </div>
            <div class="col-md-12">
                <h3 style="margin-left:-3%;padding:2%;">Pembaruan Fasilitas (-tahun)</h3>
            </div>
            <div class="col-md-12" style="border:1px solid;box-shadow: 5px 2px #007BFF;padding:3%;border-radius:10px 10px 10px 10px;">
                <div class="row">
                    <div class="col-md-1" style="padding:1%;">
                        <h6 style="text-align:center;">0</h6>
                    </div>
                    <div class="col-md-10">
                        <div class="w3-light-grey w3-round-xlarge" style="padding:1%;">
                            <div class="w3-container w3-blue w3-round-xlarge" style="width:80%">80%</div>
                        </div>
                    </div>
                    <div class="col-md-1" style="padding:1%;">
                        <h6 style="text-align:center;">100</h6>
                    </div>
                </div>
            </div><br>

            <div class="col-md-12">
                <h3 style="margin-left:-3%;padding:2%;">Fasilitas Umum</h3>
            </div>

            <div class="col-md-12" style="border:1px solid;box-shadow: 5px 2px #888888;padding:3%;border-radius:10px 10px 10px 10px;">
                <div class="row">
                    <div class="col-md-4" style="">
                        <img src="/img/kost_1.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="col-md-4">
                        <img src="/img/kost_2.jpg" alt="" style="width:100%;">
                    </div>
                    <div class="col-md-4">
                        <img src="/img/kost_3.jpg" alt="" style="width:100%;">
                    </div>
                </div>
            </div>
	</div>
</section>



@endsection
