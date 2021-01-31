<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Penawaran;
use App\Pelelangan;

class PenawaranAdminController extends Controller
{
    
    public function index()
    {
        $penawaran = Penawaran::orderBy('nama', 'desc')->paginate(10);
        return view('admin.penawaran.index', compact('penawaran'));
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
        $id_perusahaan = $request['id_perusahaan'];
        $id_proyek = $request['id_proyek'];
        
        $admin = Pelelangan::whereId($id_proyek)->update([
            'id_perusahaan' => $id_perusahaan
        ]);
        return redirect('proyek')->with('proyek', 'Proyek telah diambil!');
    }

    
    public function destroy($id)
    {
        //
    }
}
