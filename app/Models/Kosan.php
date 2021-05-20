<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'foto',
        'harga',
        'deskripsi',
        'jumlah',
        'masa_aktif',
    ];
}
