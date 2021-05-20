<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IndeKost</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

        <link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">    
         <!-- SITE TITTLE -->
  
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

        <style>
            @import url('https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Bubblegum+Sans|Caveat+Brush|Chewy|Lobster+Two');
            @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            } */
            header {
                background: #02529B;
                background: -webkit-linear-gradient(59deg, #0B60AF, #104475);
                background: linear-gradient(59deg, #104475, #2B6BA7);
                color: white;
            }
            footer {
                background: #02529B;
                background: -webkit-linear-gradient(59deg, #0B60AF, #104475);
                background: linear-gradient(59deg, #104475, #2B6BA7);
                color: white;
                margin-top:50%;
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

            #comment_form input[type="komentar"] {
                cursor: pointer;
                background: -webkit-linear-gradient(top, #efefef, #ddd);
                background: -moz-linear-gradient(top, #efefef, #ddd);
                background: -ms-linear-gradient(top, #efefef, #ddd);
                background: -o-linear-gradient(top, #efefef, #ddd);
                background: linear-gradient(top, #efefef, #ddd);
                color: #333;
                text-shadow: 0px 1px 1px rgba(255,255,255,1);
                border: 1px solid #ccc;
            }

            #comment_form input[type="komentar"]:hover {
                background: -webkit-linear-gradient(top, #eee, #ccc);
                background: -moz-linear-gradient(top, #eee, #ccc);
                background: -ms-linear-gradient(top, #eee, #ccc);
                background: -o-linear-gradient(top, #eee, #ccc);
                background: linear-gradient(top, #eee, #ccc);
                border: 1px solid #bbb;
            }

            #comment_form input[type="komentar"]:active {
                background: -webkit-linear-gradient(top, #ddd, #aaa);
                background: -moz-linear-gradient(top, #ddd, #aaa);
                background: -ms-linear-gradient(top, #ddd, #aaa);
                background: -o-linear-gradient(top, #ddd, #aaa);
                background: linear-gradient(top, #ddd, #aaa);    
                border: 1px solid #999;
            }

            ::selection {
                color: #fff;
                background-color: #8167a9;
            }
            ::-moz-selection {
                color: #fff;
                background-color: #8167a9;
            }


            /* #Navigation
            ================================================== */

            .start-header {
                opacity: 1;
                transform: translateY(0);
                padding: 20px 0;
                box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
                -webkit-transition : all 0.3s ease-out;
                transition : all 0.3s ease-out;
            }
            .start-header.scroll-on {
                box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
                padding: 10px 0;
                -webkit-transition : all 0.3s ease-out;
                transition : all 0.3s ease-out;
            }
            .start-header.scroll-on .navbar-brand img{
                height: 24px;
                -webkit-transition : all 0.3s ease-out;
                transition : all 0.3s ease-out;
            }
            .navigation-wrap{
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1000;
                -webkit-transition : all 0.3s ease-out;
                transition : all 0.3s ease-out;
            }
            .navbar{
                padding: 0;
            }
            .navbar-brand img{
                height: 28px;
                width: auto;
                display: block;
            filter: brightness(10%);
                -webkit-transition : all 0.3s ease-out;
                transition : all 0.3s ease-out;
            }
            .navbar-toggler {
                float: right;
                border: none;
                padding-right: 0;
            }
            .navbar-toggler:active,
            .navbar-toggler:focus {
                outline: none;
            }
            .navbar-light .navbar-toggler-icon {
                width: 24px;
                height: 17px;
                background-image: none;
                position: relative;
                border-bottom: 1px solid #000;
                transition: all 300ms linear;
            }
            .navbar-light .navbar-toggler-icon:after, 
            .navbar-light .navbar-toggler-icon:before{
                width: 24px;
                position: absolute;
                height: 1px;
                background-color: #000;
                top: 0;
                left: 0;
                content: '';
                z-index: 2;
                transition: all 300ms linear;
            }
            .navbar-light .navbar-toggler-icon:after{
                top: 8px;
            }
            .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
                transform: rotate(45deg);
            }
            .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
                transform: translateY(8px) rotate(-45deg);
            }
            .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
                border-color: transparent;
            }
            .nav-link{
                color: #212121 !important;
                font-weight: 500;
                transition: all 200ms linear;
            }
            .nav-item:hover .nav-link{
                color: #8167a9 !important;
            }
            .nav-item.active .nav-link{
                color: #777 !important;
            }
            .nav-link {
                position: relative;
                padding: 5px 0 !important;
                display: inline-block;
            }
            .nav-item:after{
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 100%;
                height: 2px;
                content: '';
                background-color: #8167a9;
                opacity: 0;
                transition: all 200ms linear;
            }
            .nav-item:hover:after{
                bottom: 0;
                opacity: 1;
            }
            .nav-item.active:hover:after{
                opacity: 0;
            }
            .nav-item{
                position: relative;
                transition: all 200ms linear;
            }

            /* #Primary style
            ================================================== */

            .bg-light {
                background-color: #fff !important;
                transition: all 200ms linear;
            }
            .section {
                position: relative;
                width: 100%;
                display: block;
            }
            .full-height {
                height: 100vh;
            }
            .over-hide {
                overflow: hidden;
            }
            .absolute-center {
                position: absolute;
                top: 50%;
                left: 0;
                width: 100%;
            margin-top: 40px;
                transform: translateY(-50%);
                z-index: 20;
            }
            h1{
                font-size: 48px;
                line-height: 1.2;
                font-weight: 700;
                color: #212112;
                text-align: center;
            }
            p{
                text-align: center;
                margin: 0;
                padding-top: 10px;
                opacity: 1;
                transform: translate(0);
                transition: all 300ms linear;
                transition-delay: 1700ms;
            }
            /* body.hero-anime p{
                opacity: 0;
                transform: translateY(40px);
                transition-delay: 1700ms;
            }
            h1 span{
                display: inline-block;
                transition: all 300ms linear;
                opacity: 1;
                transform: translate(0);
            }
            body.hero-anime h1 span:nth-child(1){
                opacity: 0;
                transform: translateY(-20px);
            }
            body.hero-anime h1 span:nth-child(2){
                opacity: 0;
                transform: translateY(-30px);
            }
            body.hero-anime h1 span:nth-child(3){
                opacity: 0;
                transform: translateY(-50px);
            }
            body.hero-anime h1 span:nth-child(4){
                opacity: 0;
                transform: translateY(-10px);
            }
            body.hero-anime h1 span:nth-child(5){
                opacity: 0;
                transform: translateY(-50px);
            }
            body.hero-anime h1 span:nth-child(6){
                opacity: 0;
                transform: translateY(-20px);
            }
            body.hero-anime h1 span:nth-child(7){
                opacity: 0;
                transform: translateY(-40px);
            }
            body.hero-anime h1 span:nth-child(8){
                opacity: 0;
                transform: translateY(-10px);
            }
            body.hero-anime h1 span:nth-child(9){
                opacity: 0;
                transform: translateY(-30px);
            }
            body.hero-anime h1 span:nth-child(10){
                opacity: 0;
                transform: translateY(-20px);
            }
            h1 span:nth-child(1){
                transition-delay: 1000ms;
            }
            h1 span:nth-child(2){
                transition-delay: 700ms;
            }
            h1 span:nth-child(3){
                transition-delay: 900ms;
            }
            h1 span:nth-child(4){
                transition-delay: 800ms;
            }
            h1 span:nth-child(5){
                transition-delay: 1000ms;
            }
            h1 span:nth-child(6){
                transition-delay: 700ms;
            }
            h1 span:nth-child(7){
                transition-delay: 900ms;
            }
            h1 span:nth-child(8){
                transition-delay: 800ms;
            }
            h1 span:nth-child(9){
                transition-delay: 600ms;
            }
            h1 span:nth-child(10){
                transition-delay: 700ms;
            }
            body.hero-anime h1 span:nth-child(11){
                opacity: 0;
                transform: translateY(30px);
            }
            body.hero-anime h1 span:nth-child(12){
                opacity: 0;
                transform: translateY(50px);
            }
            body.hero-anime h1 span:nth-child(13){
                opacity: 0;
                transform: translateY(20px);
            }
            body.hero-anime h1 span:nth-child(14){
                opacity: 0;
                transform: translateY(30px);
            }
            body.hero-anime h1 span:nth-child(15){
                opacity: 0;
                transform: translateY(50px);
            }
            h1 span:nth-child(11){
                transition-delay: 1300ms;
            }
            h1 span:nth-child(12){
                transition-delay: 1500ms;
            }
            h1 span:nth-child(13){
                transition-delay: 1400ms;
            }
            h1 span:nth-child(14){
                transition-delay: 1200ms;
            }
            h1 span:nth-child(15){
                transition-delay: 1450ms;
            } */
            /* #switch,
            #circle {
                cursor: pointer;
                -webkit-transition: all 300ms linear;
                transition: all 300ms linear; 
            } 
            #switch {
                width: 60px;
                height: 8px;
                border: 2px solid #8167a9;
                border-radius: 27px;
                background: #000;
                position: relative;
                display: block;
                margin: 0 auto;
                text-align: center;
                opacity: 1;
                transform: translate(0);
                transition: all 300ms linear;
                transition-delay: 1900ms;
            }
            body.hero-anime #switch{
                opacity: 0;
                transform: translateY(40px);
                transition-delay: 1900ms;
            }
            #circle {
                position: absolute;
                top: -11px;
                left: -13px;
                width: 26px;
                height: 26px;
                border-radius: 50%;
                background: #000;
            }
            .switched {
                border-color: #000 !important;
                background: #8167a9 !important;
            }
            .switched #circle {
                left: 43px;
                box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
                background: #fff;
            } */
            /* .nav-item .dropdown-menu {
                transform: translate3d(0, 10px, 0);
                visibility: hidden;
                opacity: 0;
                max-height: 0;
                display: block;
                padding: 0;
                margin: 0;
                transition: all 200ms linear;
            }
            .nav-item.show .dropdown-menu {
                opacity: 1;
                visibility: visible;
                max-height: 999px;
                transform: translate3d(0, 0px, 0);
            }
            .dropdown-menu {
                padding: 10px!important;
                margin: 0;
                font-size: 13px;
                letter-spacing: 1px;
                color: #212121;
                background-color: #fcfaff;
                border: none;
                border-radius: 3px;
                box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
                transition: all 200ms linear;
            }
            .dropdown-toggle::after {
                display: none;
            }

            .dropdown-item {
                padding: 3px 15px;
                color: #212121;
                border-radius: 2px;
                transition: all 200ms linear;
            }
            .dropdown-item:hover, 
            .dropdown-item:focus {
                color: #fff;
                background-color: rgba(129,103,169,.6);
            } */
            /* #Media
            ================================================== */

            @media (max-width: 767px) { 
                h1{
                    font-size: 38px;
                }
                .nav-item:after{
                    display: none;
                }
                .nav-item::before {
                    position: absolute;
                    display: block;
                    top: 15px;
                    left: 0;
                    width: 11px;
                    height: 1px;
                    content: "";
                    border: none;
                    background-color: #000;
                    vertical-align: 0;
                }
                .dropdown-toggle::after {
                    position: absolute;
                    display: block;
                    top: 10px;
                    left: -23px;
                    width: 1px;
                    height: 11px;
                    content: "";
                    border: none;
                    background-color: #000;
                    vertical-align: 0;
                    transition: all 200ms linear;
                }
                .dropdown-toggle[aria-expanded="true"]::after{
                    transform: rotate(90deg);
                    opacity: 0;
                }
                .dropdown-menu {
                    padding: 0 !important;
                    background-color: transparent;
                    box-shadow: none;
                    transition: all 200ms linear;
                }
                .dropdown-toggle[aria-expanded="true"] + .dropdown-menu {
                    margin-top: 10px !important;
                    margin-bottom: 20px !important;
                }
                body.dark .nav-item::before {
                    background-color: #fff;
                }
                body.dark .dropdown-toggle::after {
                    background-color: #fff;
                }
                body.dark .dropdown-menu {
                    background-color: transparent;
                    box-shadow: none;
                }
            }


        </style>
    </head>
    

    <body>
    <div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="https://front.codes/" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
									<a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">Beranda</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Pesan</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">History</a>
								</li>
								
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Profil</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Keluar</a>
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
    
	<div class="my-5 py-5">
	</div>

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

    </body>
<script>
(function($) { "use strict";

$(function() {
    var header = $(".start-style");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            header.removeClass("scroll-on").addClass('start-style');
        }
    });
});		
    
//Animation

$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover
    
$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
        }
});	

//Switch light/dark

$("#switch").on('click', function () {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
        $("#switch").removeClass("switched");
    }
    else {
        $("body").addClass("dark");
        $("#switch").addClass("switched");
    }
});  

})(jQuery); 
</script>
</html>
