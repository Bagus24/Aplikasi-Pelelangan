<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawarans', function (Blueprint $table) {
            $table->id();
            $table->string('id_proyek');
            $table->string('nama');
            $table->string('tanggal');
            $table->string('nilai');
            $table->string('lama');
            $table->string('mulai');
            $table->string('selesai');
            $table->string('pic');
            $table->string('harga');
            $table->string('id_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('penawaran');
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
        Schema::dropIfExists('penawarans');
    }
}
