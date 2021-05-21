<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon')->nullable();
            $table->string('email')->unique();
            $table->boolean('admin')->default(0);
            $table->boolean('pemilik')->default(0);
            $table->boolean('pengguna')->default(0);
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
