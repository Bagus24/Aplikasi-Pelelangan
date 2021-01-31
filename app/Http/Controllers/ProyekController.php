<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Pelelangan;
use Faker\Provider\ar_JO\Person;

class ProyekController extends Controller
{

    public function index()
    {
        $pelelangan = Pelelangan::orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.proyek.index', compact('pelelangan'));
    }


    public function create(Request $request)
    {
        $nama = $request['nama'];
        if ($nama == 'Proyek Jalanan') {
            $nilai = '350000000';
            $lama = '200';
            $pic = 'Agung';
            $harga = '350000000';

            return view('admin.proyek.tambah', compact('nilai', 'lama', 'pic', 'harga', 'nama'));
        } elseif ($nama == 'Proyek Tampungan Air / Bendungan') {
            $nilai = '100000000';
            $lama = '100';
            $pic = 'Hasan';
            $harga = '100000000';

            return view('admin.proyek.tambah', compact('nilai', 'lama', 'pic', 'harga', 'nama'));
        } elseif ($nama == 'Proyek Jembatan') {
            $nilai = '250000000';
            $lama = '200';
            $pic = 'Gunawan';
            $harga = '300000000';

            return view('admin.proyek.tambah', compact('nilai', 'lama', 'pic', 'harga', 'nama'));
        } elseif ($nama == 'Proyek Rumah') {
            $nilai = '300000000';
            $lama = '250';
            $pic = 'Ali';
            $harga = '300000000';

            return view('admin.proyek.tambah', compact('nilai', 'lama', 'pic', 'harga', 'nama'));
        } elseif ($nama == 'Proyek Saluran Irigasi') {
            $nilai = '100000000';
            $lama = '150';
            $pic = 'Fajar';
            $harga = '100000000';

            return view('admin.proyek.tambah', compact('nilai', 'lama', 'pic', 'harga', 'nama'));
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'nama' => ['required', 'string'],
            'tanggal' => ['required', 'string'],
            'nilai' => ['required', 'string'],
            'lama' => ['required', 'string'],
            'mulai' => ['required', 'string'],
            'pic' => ['required', 'string'],
            'harga' => ['required', 'string'],
            'id_perusahaan' => ['string']
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $nama = $request['nama'];
        $tanggal = $request['tanggal'];
        $nilai = $request['nilai'];
        $lama = $request['lama'];
        $mulai = $request['mulai'];
        $pic = $request['pic'];
        $harga = $request['harga'];
     
      
        $selesai = date('Y-m-d', strtotime('+'.$lama.' '.'days', strtotime($mulai))); //operasi penjumlahan tanggal sebanyak 6 hari
        
      
        $admin = Pelelangan::create([

            'nama' => $nama,
            'tanggal' => $tanggal,
            'nilai' => $nilai,
            'lama' => $lama,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'pic' => $pic,
            'harga' => $harga,
            'id_perusahaan' => $request['id_perusahaan'],
        ]);

        return redirect('proyek')->with('tambah', 'Data telah ditambahkan!');   
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pelelangan = Pelelangan::find($id);
        return view('admin.proyek.sunting', compact('pelelangan'));
    }


    public function update(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        $lama = $request['lama'];
        $mulai = $request['mulai'];
        $selesai = date('Y-m-d', strtotime('+'.$lama.' '.'days', strtotime($mulai)));
        $admin = Pelelangan::whereId($id)->update([
            'nama' => $request['nama'],
            'tanggal' => $request['tanggal'],
            'nilai' => $request['nilai'],
            'lama' => $request['lama'],
            'mulai' => $request['mulai'],
            'selesai' => $selesai,
            'pic' => $request['pic'],
            'harga' => $request['harga'],
            'id_perusahaan' => $request['id_perusahaan'],
        ]);
        return redirect('proyek')->with('sunting', 'Data telah diubah!');
    }

    public function destroy($id)
    {
        $pelelangan = Pelelangan::findOrFail($id);
        $pelelangan->delete();
        return redirect('proyek')->with('hapus', 'Data telah dihapus!');
    }
}
