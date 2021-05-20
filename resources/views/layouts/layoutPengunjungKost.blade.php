<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
      footer {
                background: #02529B;
                background: -webkit-linear-gradient(59deg, #0B60AF, #104475);
                background: linear-gradient(59deg, #104475, #2B6BA7);
                color: white;
            }
            footer, p, li{
                color:white;
            }

            footer a {
                color: #fff;
                font-size: 14px;
                transition-duration: 0.2s;
            }

            footer a:hover {
                color: #FA944B;
                text-decoration: none;
            }

            .copy {
                font-size: 12px;
                padding: 10px;
                border-top: 1px solid #FFFFFF;
            }

            .footer-middle {
                padding-top: 2em;
                color: white;
            }


            /*SOCİAL İCONS*/

            /* footer social icons */

            ul.social-network {
                list-style: none;
                display: inline;
                margin-left: 0 !important;
                padding: 0;
            }

            ul.social-network li {
                display: inline;
                margin: 0 0px;
            }


            /* footer social icons */

            .social-network a.icoFacebook:hover {
                background-color: #3B5998;
            }

            .social-network a.icoLinkedin:hover {
                background-color: #007bb7;
            }

            .social-network a.icoFacebook:hover i,
            .social-network a.icoLinkedin:hover i {
                color: #fff;
            }

            .social-network a.socialIcon:hover,
            .socialHoverClass {
            color: #44BCDD;
            }

            .social-circle li a {
                display: inline-block;
                position: relative;
                margin: 0 auto 0 auto;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                text-align: center;
                width: 30px;
                height: 30px;
                font-size: 15px;
            }

            .social-circle li i {
                margin: 0;
                line-height: 30px;
                text-align: center;
            }

            .social-circle li a:hover i,
            .triggeredHover {
                -moz-transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -ms--transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: all 0.2s;
                -moz-transition: all 0.2s;
                -o-transition: all 0.2s;
                -ms-transition: all 0.2s;
                transition: all 0.2s;
            }

            .social-circle i {
                color: #595959;
                -webkit-transition: all 0.8s;
                -moz-transition: all 0.8s;
                -o-transition: all 0.8s;
                -ms-transition: all 0.8s;
                transition: all 0.8s;
            }

            .social-network a {
                background-color: #F9F9F9;
            }

    #searchbox {
        background-color: #transparent;
        /* width: 208px; */
        height: 29px;
    }
    input:focus::-webkit-input-placeholder {
        color: transparent;
    }
    input:focus:-moz-placeholder {
        color: transparent;
    }
    input:focus::-moz-placeholder {
        color: transparent;
    }
    #searchbox input {
        outline: none;
    }
    #searchbox input[type="text"] {
        background: #transparent;
        margin: 0px 0px 0px 0px;
        padding: 5px 0px 5px 0px;
        border-width: 0px;
        font-family: "Arial Narrow", Arial, sans-serif;
        font-size: 12px;
        color: #F9F9F9;
        width: 70%;
        display: inline-table;
        vertical-align: top;
    }
    #button-submit {
        background: url(http://4.bp.blogspot.com/-OcDQ6Z9ojlQ/VD1KnwJjFOI/AAAAAAAAAgs/cu_pKN6bpL8/s1600/magnifier.png) no-repeat;
        border-width: 0px;
        cursor: pointer;
        margin-left: 0px;
        margin-top: 4px;
        width: 21px;
        height: 22px;
    }
    #button-submit:hover {
        background: url(http://2.bp.blogspot.com/-4-xFDFGKJrA/VD1Kn04f9TI/AAAAAAAAAgw/2ta84QY1x9A/s1600/magnifier-hover.png) no-repeat;
    }
    #button-submit:active {
        background: url(http://2.bp.blogspot.com/-4-xFDFGKJrA/VD1Kn04f9TI/AAAAAAAAAgw/2ta84QY1x9A/s1600/magnifier-hover.png) no-repeat;
        outline: none;
    }
    #button-submit::-moz-focus-inner {
        border: 0;
    }
    .headerNav{
                background: #02529B;
                background: -webkit-linear-gradient(59deg, #0B60AF, #104475);
                background: linear-gradient(59deg, #104475, #2B6BA7);
                color: white;
            }
  </style>

</head>

<body class="body-wrapper">


<section class="headerNav">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="/">
						<img src="/img/account.png" style="width:7%;height:10%;" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item ">
								<a class="nav-link" href="/">Beranda</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="#">Pesan</a>
							</li>
                            <li class="nav-item ">
								<a class="nav-link" href="/historypengunjung">History</a>
							</li>
                            <li class="nav-item ">
								<a class="nav-link" href="#">Profil</a>
							</li>
                            <li class="nav-item ">
								<a class="nav-link" href="#">Keluar</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->


<div class="container-fluid">
            @yield('main-content')
</div>


<!--============================
=            Footer            =
=============================-->

<footer class="mainfooter" role="contentinfo">
            <div class="footer-middle">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                    <!--Column1-->
                    <div class="footer-pad">
                        <a><img src="/img/logo.png" alt="#" style="width: 100%;height: 100%;"></a>
                    </div>
                </div>
                <div class="col-md-6" id="comment_form">
                    <!--Column1-->
                    <div class="footer-pad">
                    <div>
                        <input type="komentar" name="komentar" value="Komentar" style="text-align:center;color:black;">
                    </div><br>
                    <ul class="list-unstyled">
                        <li><img src="img/lokasi.png" alt="#" style="width: 10%;height: 10%;"></li>
                        <li>Lokasi umum kost :</li><br>
                        <li>Semua kost yang tersedia adalah kost yang berada di kawasan Kota Balige,</li>
                        <li>Kabupaten Toba Samosir, Sumatera Utara.</li>

                    </ul>
                    </div>
                </div>
                    <div class="col-md-3">
                        <h4>Hubungi Kami</h4>
                        <h5>(Customer Service)</h5><br>
                        <ul class="social-network social-circle">
                            <li>
                                <a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a>IndeKost
                            </li><br>
                            <li>
                                <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>IndeKost
                                </li><br>
                            <li>
                                <a href="#" class="icoWhatshapp" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>0822 - xxxx - xxxx
                            </li>
                        </ul>				
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright DeTing - Kel-06 - 2020/2021</p>
                    </div>
                </div>

            </div>
            </div>
        </footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>



