@extends('layouts.layoutPenggunaAktif')

@section('title')
    <title>Masa Aktif</title>
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 15%;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button1 {
  width: 200px;
  background-color: white; 
  color: black; 
  border: 2px solid #008000;
}

.button1:hover {
  background-color: #008000;
  color: white;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.button3:hover {
  background-color: #FF0000;
  color: white;
}
</style>
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="row">
        <!-- Category list -->
            <div class="col-lg-2 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
            </div> <!-- /Category List -->
            <div class="col-lg-8 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="header" style="text-align: center;">
                       <img src="img/account.png" style="width:15%;height:15%;" alt="">
                    </div>
                    <div class="header" style="text-align: center;">
                        <h3>Nama Lengkap</h3>
                        <h3>Nama Pemilik Kos</h3>
                        <br>
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-2 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="header" style="text-align: center;margin-top:15%;"><br>
                        <button class="button button2">History - KOST</button>
                    </div>
            </div> <!-- /Category List -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="row">
        <!-- Category list -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="header" style="text-align: center;">
                        <h3>KOST-<br>Mulai digunakan</h3>
                    </div>
                    <div class="header" style="text-align: center;">
                        dd/mm/yyyy
                    </div>
            </div> <!-- /Category List -->
        <!-- Category list -->
        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="header" style="text-align: center;">
                       <h3>KOST-<br>Akan berakhir</h3>
                    </div>
                    <div class="header" style="text-align: center;">
                        dd/mm/yyyy
                    </div>
            </div> <!-- /Category List -->
        <!-- Category list -->
        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="header" style="text-align: center;">
                        <h3>KOST-<br>Masa tenggang</h3>
                    </div>
                    <div class="header" style="text-align: center;">
                        dd/mm/yyyy
                    </div>
            </div> <!-- /Category List -->
        <!-- Category list -->
        <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br>
                        <br><h3>Kapasitas-<br>KOST</h3>
                    </div>
                    <div class="header" style="text-align: center;">
                        4 Orang
                    </div>
            </div> <!-- /Category List -->
        <!-- Category list -->
        <div class="col-lg-9 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    
            </div> <!-- /Category List -->
        <!-- Category list -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br>
                        <br><h3>Teman Satu-<br>KOST</h3>
                    </div>
                    <div class="header" style="text-align: center;"><br>
                        Teman 1
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                        <br><br>
                    </div>
                    <div class="header" style="text-align: center;"><br>
                        Teman 2
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                        <br><br>
                    </div>
                    <div class="header" style="text-align: center;"><br>
                        Teman 3
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-2 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                        <button class="button button1">Tambah masa Aktif kost</button>
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-2 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                        <button class="button button3">Akhiri masa Aktif kost</button>
                    </div>
            </div> <!-- /Category List -->
            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6"><br>
                    <div class="header" style="text-align: center;"><br><br>
                    </div>
            </div> <!-- /Category List -->
        </div>
    </div>
</div>
@endsection