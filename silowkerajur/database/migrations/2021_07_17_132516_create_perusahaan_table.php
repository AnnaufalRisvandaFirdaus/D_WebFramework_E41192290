<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
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
            $table->string('name_perusahaan');
            $table->string('pekerjaan');
            $table->string('gaji');
            $table->string('alamat_perusahaan');
            $table->string('syarat_ketentuan');
            $table->string('kontak');
            $table->string('foto_perusahaan');
            $table->rememberToken();
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
        Schema::dropIfExists('perusahaan');
    }
}
