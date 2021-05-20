@extends('layouts.layoutPengunjung')

@section('title')
    <title>Pemilik Kost</title>
@endsection

@section('main-content')
<!-- <div class="product-ratings" style="margin-top:0.0.1%;">
    <h5 style="margin-left:-0.8%;">Rating</h5>
    <div class="row">
    <ul class="list-inline">
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i>/</i></li>
       
    </ul>
    <ul class="list-inline" style="margin-left:1%;">
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
       
    </ul>
    </div>
</div> -->
<section class="popular-deals section">
	<div class="container">
    <div class="row">
            <div class="col-md-4">
                <h3>Nama Pemilik Kost</h3>
            </div>
            <div class="col-md-8" style="position: absolute;right: 150px;width: 110px;height: 120px;">
                <li class="list-inline-item">
                    <a href="#"> Filter &nbsp; <i class="fa fa-filter"></i></a></li>
                
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <h7>Bergabung  pada (-tahun)</h7>
            </div>
            <div class="col-md-8" style="position: absolute;right: 150px;width: 400px;height: 120px;">
                <i class="fa fa-star"></i> VIP &nbsp;&nbsp;&nbsp;<span><i class="fa fa-comments-o"></i> Kirim Pesan</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-percent"></i> Diskon</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-tags"></i> Fasilitas</span>
    
            </div>
        </div><br>
        <div class="col-md-12">
            <h6 style="margin-left:-1.3%;"><i class="fa fa-location-arrow"></i> &nbsp;Alamat / tempat tinggal</h6>
        </div>
                    <br><br><br>
                    <h3 class=""><i class="fa fa-child"></i> &nbsp; Kost Pria</h3> <hr><br><br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <!-- <div class="thumb-content">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">
                                            <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        </a>
                                    </div> -->
                                    <div id="image_div">
                                        <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        <a href="#"><p id="image_label"><span><i class="fa fa-heart-o"></i></span></p></a>
                                    </div>
                                    <div class="">
                                        <input type="text" name="input" id="harga" value="Rp0.00,-" style="width:100%; text-align:center;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">MELINTANG NYAMAN KOST</a></h4>
                                        <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-user-o"></i>Rinaldy Marbun</a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-location-arrow"></i>Balige</a>
                                            </li>
                                            
                                        </ul>
                                        <p class="card-text">Jl.Anggara Merak. No.3 Batu Luncuran, Balige, Sumatera Utara</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected "><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-4 ">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <!-- <div class="thumb-content">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">
                                            <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        </a>
                                    </div> -->
                                    <div id="image_div">
                                        <img class="card-img-top img-fluid" src="/img/kost_2.jpg" alt="Card image cap">
                                        <a href="#"><p id="image_label"><span><i class="fa fa-heart-o"></i></span></p></a>
                                    </div>
                                    <div class="">
                                        <input type="text" name="input" id="harga" value="Rp0.00,-" style="width:100%; text-align:center;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">MELINTANG NYAMAN KOST</a></h4>
                                        <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-user-o"></i>Rinaldy Marbun</a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-location-arrow"></i>Balige</a>
                                            </li>
                                            
                                        </ul>
                                        <p class="card-text">Jl.Anggara Merak. No.3 Batu Luncuran, Balige, Sumatera Utara</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected "><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="text-align:right;">
                        <div class="container">
                            <a href="#">Lihat semua &nbsp; &nbsp;<i class="fa fa-fast-forward"></i></a>
                           
                        </div>
                </div>

                    </div>

                    <h3 class=""><i class="fa fa-child"></i> &nbsp; Kost Wanita</h3><hr><br><br>
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <!-- <div class="thumb-content">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">
                                            <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        </a>
                                    </div> -->
                                    <div id="image_div">
                                        <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        <a href="#"><p id="image_label"><span><i class="fa fa-heart-o"></i></span></p></a>
                                    </div>
                                    <div class="">
                                        <input type="text" name="input" id="harga" value="Rp0.00,-" style="width:100%; text-align:center;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">MELINTANG NYAMAN KOST</a></h4>
                                        <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-user-o"></i>Rinaldy Marbun</a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-location-arrow"></i>Balige</a>
                                            </li>
                                            
                                        </ul>
                                        <p class="card-text">Jl.Anggara Merak. No.3 Batu Luncuran, Balige, Sumatera Utara</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected "><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <!-- <div class="thumb-content">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">
                                            <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        </a>
                                    </div> -->
                                    <div id="image_div">
                                        <img class="card-img-top img-fluid" src="/img/kost_2.jpg" alt="Card image cap">
                                        <a href="#"><p id="image_label"><span><i class="fa fa-heart-o"></i></span></p></a>
                                    </div>
                                    <div class="">
                                        <input type="text" name="input" id="harga" value="Rp0.00,-" style="width:100%; text-align:center;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">MELINTANG NYAMAN KOST</a></h4>
                                        <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-user-o"></i>Rinaldy Marbun</a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-location-arrow"></i>Balige</a>
                                            </li>
                                            
                                        </ul>
                                        <p class="card-text">Jl.Anggara Merak. No.3 Batu Luncuran, Balige, Sumatera Utara</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected "><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="product-item bg-light">
                                <div class="card">
                                    <!-- <div class="thumb-content">
                                        <i class="fa fa-heart-o"></i>
                                        <a href="#">
                                            <img class="card-img-top img-fluid" src="/img/kost_1.jpg" alt="Card image cap">
                                        </a>
                                    </div> -->
                                    <div id="image_div">
                                        <img class="card-img-top img-fluid" src="/img/kost_2.jpg" alt="Card image cap">
                                        <a href="#"><p id="image_label"><span><i class="fa fa-heart-o"></i></span></p></a>
                                    </div>
                                    <div class="">
                                        <input type="text" name="input" id="harga" value="Rp0.00,-" style="width:100%; text-align:center;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="#">MELINTANG NYAMAN KOST</a></h4>
                                        <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-user-o"></i>Rinaldy Marbun</a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="#"><i class="fa fa-location-arrow"></i>Balige</a>
                                            </li>
                                            
                                        </ul>
                                        <p class="card-text">Jl.Anggara Merak. No.3 Batu Luncuran, Balige, Sumatera Utara</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected "><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="text-align:right;">
                        <div class="container">
                            <a href="#">Lihat semua &nbsp; &nbsp;<i class="fa fa-fast-forward"></i></a>
                           
                        </div>
                </div>

                    </div>
	</div>
</section>

@endsection