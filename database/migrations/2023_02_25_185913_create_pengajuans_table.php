<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengaju_dpn');
            $table->string('nama_pengaju_blk');
            $table->string('no_ktp');
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('no_telp');
            $table->string('email');
            $table->binary('file_kak');
            $table->binary('file_kb');
            $table->binary('file_pks');
            $table->string('kategori_pengajuan');
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
        Schema::dropIfExists('pengajuans');
    }
}
