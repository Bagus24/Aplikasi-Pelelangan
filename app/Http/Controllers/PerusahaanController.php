<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelelangan;
use Auth;

class PerusahaanController extends Controller
{
    
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $pelelangan = Pelelangan::orderBY('updated_at', 'desc')->where('id_perusahaan', $id)->paginate(10);
            return view('perusahaan.proyek.index', compact('pelelangan'));
        }
        
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        // if (Auth::check()) {
        //     $id_perusahaan = Auth::user()->id;
        //     $admin = Pelelangan::whereId($id)->update([
        //         'id_perusahaan' => $id_perusahaan
        //     ]);
        //     return redirect('perusahaan')->with('sunting', 'Proyek telah diambil!');
        // }

        
    }

   
    public function destroy($id)
    {
        // if (Auth::check()) {
        //     $admin = Pelelangan::whereId($id)->update([
        //         'id_perusahaan' => 0,
        //     ]);
        //     return redirect('perusahaan')->with('hapus', 'Proyek telah dibatalkan!');
        // }
        
    }
}
