<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    background-color:#02529B;
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
                <div class="row justify-content-center px-3 mb-3"> <img src="/img/logo.png" alt=""> </div>
            </div>
            <div class="card card2">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> </div>
                        Daftarkan Dirimu<br><br>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group"> Nama <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control">
                        @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror </div>
                        <div class="form-group"> Jenis Kelamin <input type="jeniskelamin" id="jeniskelamin" name="jeniskelamin" placeholder="Laki-laki/Wanita" class="form-control"> </div>
                        <div class="form-group"> Username <input type="text" id="username" name="username" placeholder="Username" class="form-control"> </div>
                        <div class="form-group"> No Telp <input type="text" id="telepon" name="telepon" placeholder="No Telp" class="form-control"> </div>
                        <div class="form-group"> Asal <input type="text" id="alamat" name="alamat" placeholder="Asal" class="form-control"> </div>
                        <div class="form-group"> E-mail <input type="text" id="email" name="email" placeholder="Email" class="form-control"> </div>
                        <div class="form-group"> Password <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button type="submit" class="btn-block btn-color">Daftar </button> </div>
                        
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <a href="{{ route('login') }}" class="sm-text mx-auto mb-3">Sudah punya akun?<button class="btn btn-white ml-2">Login</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

                