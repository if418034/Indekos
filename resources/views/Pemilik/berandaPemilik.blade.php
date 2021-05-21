@extends('layouts.layoutPemilik')

@section('title')
    <title>Beranda</title>
@endsection

@section('main-content')

    
<style>
#calendar {
    width: 100%;
    height:50%;
    margin: 0 auto;
}

.response {
    height: 10%;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
    <br><br>
    <section class="popular-deals section">
	<div class="container-fuild">
            <div class="row">
                <div class="card">
                    
                </div>
            </div>
            <div class="col-md-12">
                <h3 style="margin-left:-3%;padding:2%;color:#22A82F;">Informasi</h3>
            </div>
            
           <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #007BFF;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#007BFF;">
                                    <i class="fa fa-users" style="width:20px;height:100%;"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#007BFF;">5</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Jumlah Pengguna</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #22A82F;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#22A82F;">
                                    <i class="fa fa-male"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#22A82F;">5</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Laki-laki</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #EE1497;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#EE1497;">
                                    <i class="fa fa-female"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#EE1497;">0</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Perempuan</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>

            <br>

           <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #7E14AF;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#7E14AF">
                                <i class="far fa-bed-alt"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#7E14AF;">10</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Jumlah Kamar</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #EC0039;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#EC0039;">
                                    <i class="fa fa-bed"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#EC0039;">5</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Kamar Terisi</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="">
                        <div class="col-md-12" style="padding:5%;border:1px solid;border-radius: 15px 50px;box-shadow: 5px 10px #000000;">
                            <div class="row">
                                <div class="col-md-4" style="text-align:center;color:#000000;">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="col-md-8" style="text-align:center;">
                                    <div class="col-md-12" >
                                       <h2 style="color:#000000;">5</h2>
                                    </div>
                                    <div class="col-md-12" style="text-align:center;">
                                       <h2>Kamar Kosong</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div><br>

            <div class="col-md-12">
                <h3 style="margin-left:-3%;padding:2%;color:#22A82F;">Kalender Penagihan</h3>
            </div>


    <div class="response"></div>
    <div id='calendar'></div>       
            
	</div>
</section>



@endsection