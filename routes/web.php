<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//aman
Route::get('/', function () {
    return view('/Pengunjung/home');
});

Route::get('/loginView', [UserController::class, 'loginView']);

Route::get('/profil', function () {
    return view('/Pengunjung/profil');
});

//aman
Route::get('/fasilitas', function () {
    return view('/Pengunjung/fasilitas');
});

//aman
Route::get('/pesan', function () {
    return view('/Pengunjung/pesan');
});

//aman
Route::get('/listPemilikKos', [KosanController::class, 'kostOwner']);

//Route::get('/potonganHargaPengunjung', function () {
//    return view('/Pengunjung/potonganHargaPengunjung');
//});

Route::get('/pesan', function () {
    return view('/Pengunjung/pesan');
});

Route::get('/historypengunjung', function () {
    return view('/Pengunjung/historypengunjung');
});

//Route::get('/pemilikkost', function () {
//    return view('/Pengunjung/pemilikkost');
//});

//
Route::get('/berandaPengguna', function () {
    return view('/Pengguna/berandaPengguna');
});

//
Route::get('/masaAktifPengguna', function () {
    return view('/Pengguna/masaAktifPengguna');
});

//
Route::get('/historyKosPengguna', function () {
    return view('/Pengguna/historyKosPengguna');
});

Route::get('/berandaPemilik', function () {
    return view('/Pemilik/berandaPemilik');
});

Route::get('/pesanKosPemilik', function () {
    return view('/Pemilik/pesanKosPemilik');
});

Route::get('/bookingPemilik', function () {
    return view('/Pemilik/bookingPemilik');
});

Route::get('/beranda', function () {
    return view('/Pemilik/beranda');
});

Route::get('/bookingLanjutan', function () {
    return view('/Pemilik/bookingLanjutan');
});

Route::get('/profilPemilik', function () {
    return view('/Pemilik/profilPemilik');
});

Route::get('/penggunaPemilik', function () {
    return view('/Pemilik/penggunaPemilik');
});

Route::get('/berandaAdmin', function () {
    return view('/Admin/berandaAdmin');
});

Route::get('/tambahPemilikKost', [KosanController::class, 'viewTambahPemilikKost']);

Route::get('/kostAdmin', [KosanController::class, 'kostAdmin']);

Route::get('/listKost', [KosanController::class, 'show']);

Route::get('/pemilikKostAdmin', [KosanController::class, 'pemilikKost']);
Route::get('/hapusPemilik/{id}', [KosanController::class, 'hapusPemilik']);
Route::get('/editPemilikKostAdmin', [KosanController::class, 'edit']);
Route::get('/tambahKostAdmin', [KosanController::class, 'viewTambahKost']);
Route::post('/postTambahKost', [KosanController::class, 'tambahKost']);
Route::post('/postTambahPemilikKost', [KosanController::class, 'tambahPemilikKost']);
Route::get('/deleteKost/{id}', [KosanController::class, 'hapusKost']);
Route::get('/editKost/{id}', [KosanController::class, 'editKost']);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


