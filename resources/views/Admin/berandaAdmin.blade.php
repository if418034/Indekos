@extends('layouts.layoutAdmin')

@section('title')
    <title>Beranda</title>
@endsection

@section('main-content')
<<div class="row">

                
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

    <div class="col-md-4">
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
                            <li class="list-inline-item "><i class="fa fa-star"></i></li>
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

    <div class="col-md-12" style="text-align:center;">
    <div class="container">
        <a href="#">Lihat semua</a>
        <div class="row">
            <div class="col-md-6">
            <hr style="width:5%;height:5%;color:blue;margin-right:5%;">
            </div>
            <hr style="width:5%;height:5%;color:blue;margin-left:5%;">
        </div>
    </div>
</div>
    
</div>

@endsection