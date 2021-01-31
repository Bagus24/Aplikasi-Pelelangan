<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelelanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelelangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('tanggal');
            $table->string('nilai');
            $table->string('lama');
            $table->string('mulai');
            $table->string('selesai');
            $table->string('pic');
            $table->string('harga');
            $table->string('id_perusahaan');
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
        Schema::dropIfExists('pelelangan');
    }
}
