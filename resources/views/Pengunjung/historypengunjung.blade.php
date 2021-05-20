@extends('layouts.layoutPengunjung')

@section('title')
    <title>History Pengunjung</title>
@endsection

@section('main-content')

<section class="popular-deals section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>HISTORY</h2>
					<p>Rasakan Pengalaman yang tak-Terlupakan</p>
				</div>
                <h3 class="fa fa-history"> 1 Hari terakhir</h3><br><br>
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

                    <h3 class="fa fa-history"> 1 Minggu terakhir</h3><br><br>
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

                        

                    </div>

                    <h3 class="fa fa-history"> 1 Bulan terakhir</h3><br><br>
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

                        

                    </div>
	</div>
</section>



@endsection