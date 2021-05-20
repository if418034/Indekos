<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KosanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kosan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'harga' => 'required'
        ]);

        return Kosan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kosan $kosan)
    {
        return view('Admin.kostAdmin', compact('kosan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/Admin/editPemilikKostAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Kosan::destroy($id);
    }

    public function kostOwner()
    {
        $owners = User::all()->where('pemilik', 1);
        $kosans = Kosan::all();
        return view('Pengunjung.listPemilikKos', compact('owners', 'kosans'));
    }

    public function kostAdmin()
    {
        $details = DB::table('users as u')
            ->join('kosans as k', 'u.id', '=', 'k.user_id')
            ->select('u.nama as userNama', 'u.alamat as userAlamat', 'u.telepon as userTelepon', 'u.email as userEmail'
            ,'k.id as kosanId' , 'k.nama as kosanNama', 'k.alamat as kosanAlamat', 'k.foto as kosanFoto', 'k.harga as kosanHarga', 'k.deskripsi as kosanDeskripsi', 'k.jumlah as kosanJumlah', 'k.masa_aktif as kosanMasaAktif')
            ->get();

        return view('/Admin/kostAdmin', compact('details'));
    }

    public function viewTambahKost()
    {
        $owners = User::all()->where('pemilik', 1);

        return view('Admin.tambahKostAdmin', compact ('owners'));
    }

    public function tambahKost(Request $request)
    {
        $data = new Kosan();
        $data->nama = $request->nama;
        $data->user_id = $request->user_id;
        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->foto = $request->foto;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->jumlah = $request->jumlah;
        $data->masa_aktif = $request->masa_aktif;
        $data->save();

        return redirect('/kostAdmin');
    }

    public function hapusKost($id)
    {
        $hapus = Kosan::find($id);

        $hapus->delete();
        return redirect('kostAdmin');
    }

    public function editKost($id)
    {
        $data = Kosan::findOrFail($id);

        return view('/Admin.editKostAdmin', compact('data'));
    }

    public function pemilikKost()
    {
        $pemiliks = User::all()->where('pemilik', 1);

        return view('/Admin.pemilikKosAdmin', compact('pemiliks'));
    }

    public function hapusPemilik($id)
    {
        $hapus = User::find($id);

        $hapus->delete();
        return redirect('kostAdmin');
    }

    public function viewTambahPemilikKost()
    {
        return view('/Admin.tambahPemilikKosAdmin');
    }

    public function tambahPemilikKost(Request $request)
    {
        $data = new User();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->email = $request->email;
        $data->password = null;
        $data->pemilik = 1;
        $data->save();

        return redirect('/kostAdmin');
    }
}
