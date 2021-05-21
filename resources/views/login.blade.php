<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    @yield('title')

    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #0000CD, #00008B);
            background-repeat: no-repeat
        }

        input,
        textarea {
            background-color: #1C76C9;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #1C76C9 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #1C76C9 !important;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .card {
            border-radius: 0;
            border: none;
            background-color: #02529B;
        }

        .card1 {
            width: 50%;
            padding: 70px 30px 50px 90px
        }

        .card2 {
            width: 50%;
            background-image: linear-gradient(to right, #1C76C9, #4169E1)
        }

        #logo {
            width: 70px;
            height: 60px
        }

        .heading {
            margin-bottom: 60px !important
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #000 !important
        }

        ::-ms-input-placeholder {
            color: #000 !important
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(to right, #1C76C9, #02529B);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #02529B, #1C76C9)
        }

        .btn-white {
            border-radius: 50px;
            color: #1C76C9;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #1C76C9 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #02529B, #1C76C9)
        }

        a {
            color: #000
        }

        a:hover {
            color: #000
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important
        }

        .sm-text {
            font-size: 15px
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                /* padding: 40px 30px 10px 30px */
            }

            .card2 {
                width: 100%
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important
            }

            .card2 {
                padding: 50px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }

    </style>
</head>

<body>
<div class="container px-7 py-6 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1 justify-content-center">
                <div class="my-auto px-md-4 justify-content-center ">
                    <img src="/img/kamar_1.jpg" style="width:100%;height:100%;" alt="">
                </div>
                <div class="my-auto px-md-4 justify-content-center ">
                    <img src="/img/kamar_3.jpg" style="width:100%;height:100%;" alt="">
                </div>
                <div class="my-auto px-md-4 justify-content-center ">
                    <img src="/img/kamar_2.jpg" style="width:100%;height:100%;" alt="">
                </div>
                <div class="my-auto px-md-4 justify-content-center ">
                    Balige, Kabupaten Toba Samosir, Sumatera Utara
                </div>
            </div>
            <div class="card card2">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-7 my-2">
                        <div class="row justify-content-center px-3 mb-3"><img src="/img/logo.png" alt=""></div>
                        <div id="my-signin2"></div>
                        <a href="{{ url('auth/google') }}" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

