<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penawaran;
use App\Pelelangan;
use Auth;

class PenawaranController extends Controller
{
    
    public function index()
    {
        $id = Auth::user()->id;
        $penawaran = Penawaran::orderBy('updated_at', 'desc')->where('id_perusahaan', $id)->paginate(10);
        return view('perusahaan.penawaran.index', compact('penawaran'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $id_proyek = $request['id_proyek'];
        $id_perusahaan = $request['id_perusahaan'];
        $proyek = Pelelangan::where('id', $id_proyek)->first();
        $perusahaan = User::where('id', $id_perusahaan)->first();

        $harga_proyek = $proyek['harga'];
        $penawaran = $request['penawaran'];
        
        if ($harga_proyek > $penawaran) {
            return redirect('home')->with('penawaran', 'Penawaran anda terlalu kecil!');
        } else {
            $admin = Penawaran::create([

                'id_proyek' => $id_proyek,
                'nama' => $proyek['nama'],
                'tanggal' => $proyek['tanggal'],
                'nilai' => $proyek['nilai'],
                'lama' => $proyek['lama'],
                'mulai' => $proyek['mulai'],
                'selesai' => $proyek['selesai'],
                'pic' => $proyek['pic'],
                'harga' => $proyek['harga'],
                'id_perusahaan' => $id_perusahaan,
                'nama_perusahaan' => $perusahaan['name'],
                'penawaran' => $request['penawaran']
            ]);
    
            return redirect('penawaran')->with('tambah', 'Penawaran sukses!');
        }
        
        
        
        
    }

   
    public function show($id)
    {
        $penawaran = Penawaran::where('id_proyek', $id)->paginate(10);
        
        return view('perusahaan.penawaran.show', compact('penawaran'));
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
