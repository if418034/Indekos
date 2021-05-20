<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('foto');
            $table->string('harga');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->date('masa_aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosans');
    }
}
