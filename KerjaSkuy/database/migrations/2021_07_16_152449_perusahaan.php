<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('gaji')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('syarat_ketentuan')->nullable();
            $table->string('kontak')->nullable();
            $table->string('foto_perusahaan')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}