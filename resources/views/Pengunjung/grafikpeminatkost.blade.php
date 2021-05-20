@extends('layouts.layoutPengunjung')

@section('title')
    <title>Pemilik Kost</title>
@endsection

@section('main-content')
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<section class="popular-deals section">
	<div class="container">
           
            <h3 style="text-align:center;">Peminat Kost-kost (-an) Balige</h3>
            <div class="col-md-12">
                <div class="row">
                    <div class= col-md-8>
                        <hr style="width:10%;margin-left:65%;color:red;height:5px;border:none;color:#333;background-color:#74E6FF;border: none;
                                            border-shadow: 0px 0px 0px 10px;
                                            color: white;
                                            text-decoration: none;
                                            border-top-left-radius: 20px 20px;
                                            cursor: pointer;">
                    </div>
                    <div class= col-md-4>
                    <hr style="width:10%;margin-left:-60%;color:red;height:5px;border:none;background-color:#74E6FF; border: none;
                                            border-shadow: 0px 0px 0px 10px;
                                            color: white;
                                            text-decoration: none;
                                            border-top-left-radius: 50px 20px;
                                            cursor: pointer;">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <a href="#"><img src="/img/logo.png" alt="" style="width:10%;display: block;margin-left: auto;margin-right: auto;"></a>
            </div>
           <br>

           <div class="col-md-12">
                <div class="row">
                    <div class= col-md-3>
                        <a href="#">
                            <button name="button1"  
                            style="
                                color: #00EF0A;
                                padding: 18px;
                                
                                text-decoration: none;
                                width:100%;
                                cursor: pointer;">Peminat kost Pria<br>(-aktif)
                            </button>
                        </a>
                    </div>

                    <div class= col-md-3>
                        <a href="#">
                            <button name="button1"  
                            style="
                                color: #FA1313;
                                padding: 18px;
                                text-decoration: none;
                                width:100%;
                                border-color:#74E6FF;
                                cursor: pointer;">Peminat kost Wanita<br>(-aktif)
                            </button>
                        </a>
                    </div>

                    <div class= col-md-3>
                        <a href="#">
                            <button name="button1"  
                            style="
                                color: #BDCD00;
                                padding: 18px;
                                text-decoration: none;
                                width:100%;
                                cursor: pointer;">Peminat kost Pria (aktif)<br>(-aktif)
                            </button>
                        </a>
                    </div>

                    <div class= col-md-3>
                        <a href="#">
                            <button name="button1"  
                            style="
                                color: #ED2DF1;
                                padding: 18px;
                                text-decoration: none;
                                width:100%;
                                border-color:#74E6FF;
                                cursor: pointer;">Peminat kost Wanita (aktif)<br>(-aktif)
                            </button>
                        </a>
                    </div>
                </div>
           </div>

           <h3 class="" style="margin-top:5%;">Pemilik KOST (peminat)</h3>
           <div class="col-md-12" style="margin-top:2%;box-shadow: 5px 2px #888888">
                <div class="row">
                    <div class="col-md-9" style="border-color:#74E6FF;border:1px solid;margin-center:auto;">
                        <div id="container_1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                    <div class="col-md-3" style="border:1px solid;">
                    <table id="datatable_2">
                                <hr>
                                <thead>
                                    <tr>
                                    <th></th>
                                    <th>Pria</th>
                                    <th>Wanita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>Januari</th>
                                    <td>60</td>
                                    <td>40</td>
                                    </tr>
                                    <tr>
                                    <th>Februari</th>
                                    <td>40</td>
                                    <td>60</td>
                                    </tr>
                                    <tr>
                                    <th>Maret</th>
                                    <td>50</td>
                                    <td>50</td>
                                    </tr>
                                    <tr>
                                    <th>April</th>
                                    <td>49</td>
                                    <td>51</td>
                                    </tr>
                                    <tr>
                                    <th>Mei</th>
                                    <td>0</td>
                                    <td>0</td>
                                    </tr>
                                </tbody>
                                </table>
                    </div>
                </div>
           </div>

           <h3 class="" style="margin-top:5%;">Pemilik KOST (Keseluruhan)</h3>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="border:1px solid;box-shadow: 5px 2px #888888">
                        
                    </div>
                    <div class="col-md-1">
                        <h3 style="font-size:15px;">/ Jiwa</h3>
                    </div>
                </div>
            </div>
           <h3 class="" style="margin-top:5%;">Pengguna KOST (Keseluruhan)</h3>
           <div class="col-md-12" style="margin-top:2%;box-shadow: 5px 2px #888888:">
                <div class="row">
                    <div class="col-md-8" style="border-color:#74E6FF;margin-center:auto;;">
                        <div class="row" style="padding:5%;">
                    
                            <div class="col-md-8" style="border:1px solid;box-shadow: 5px 2px #888888">
                                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                            </div>
                            <div class="col-md-4" style="border:1px solid;box-shadow: 5px 2px #888888">
                                <table id="datatable">
                                <hr>
                                <thead>
                                    <tr>
                                    <th></th>
                                    <th>Pria</th>
                                    <th>Wanita</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th>Januari</th>
                                    <td>60</td>
                                    <td>40</td>
                                    </tr>
                                    <tr>
                                    <th>Februari</th>
                                    <td>40</td>
                                    <td>60</td>
                                    </tr>
                                    <tr>
                                    <th>Maret</th>
                                    <td>50</td>
                                    <td>50</td>
                                    </tr>
                                    <tr>
                                    <th>April</th>
                                    <td>49</td>
                                    <td>51</td>
                                    </tr>
                                    <tr>
                                    <th>Mei</th>
                                    <td>0</td>
                                    <td>0</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="border:1px solid;box-shadow: 5px 2px #888888;">
                        <h3 style="text-align:center;padding:5%;">Pengguna Keluar KOST <br>(Keseluruhan)</h3>
                        
                        <div class="graphicholder">
                            <div class="outerring">
                                <div class="pie" style="animation-delay: -6s"></div>
                                    <div class="highlight"></div>
                                        <div class="graphOuterBorder"></div>
                                        <div class="graphtext">
                                            <div class="graphData">
                                            <h5>130+</h5>
                                            <h6 style="text-align:center;">Pengguna yang tambah dari keseluruhan adalah</h6>
                                            <h6 style="text-align:center;">2100</h6>
                                        </div>
                            </div>
               
       </div>
   </div>
                    </div>
                </div>
           </div>

	</div>

</section>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>
    Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pengguna KOST dalam data Pria dan Wanita'
    },
    yAxis: {
        allowDecimals: false,
        title: {
        text: 'Persentase'
        }
    },
    tooltip: {
        formatter: function () {
        return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
    });s
</script>
<script>
    Highcharts.chart('container_1', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pemilik KOST dalam data Pria dan Wanita'
    },
    yAxis: {
        allowDecimals: false,
        title: {
        text: 'Persentase'
        }
    },
    tooltip: {
        formatter: function () {
        return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
    });s
</script>


@endsection