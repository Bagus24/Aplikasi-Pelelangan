<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    protected $fillable = [
        'id_proyek', 'nama', 'tanggal', 'nilai', 'lama', 'mulai', 'selesai', 'pic', 'harga', 'id_perusahaan', 'nama_perusahaan', 'penawaran' ];
}
