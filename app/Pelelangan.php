<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelelangan extends Model
{
    protected $table = 'pelelangan';
    protected $fillable = [
        'nama', 'tanggal', 'nilai', 'lama', 'mulai', 'selesai', 'pic', 'harga', 'id_perusahaan' ];
}
