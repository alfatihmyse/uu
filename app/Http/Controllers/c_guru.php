<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_guru;

class c_guru extends Controller
{

    public function index()
    {
        $guru= m_guru::latest()->get();
        $data = [
            'title' => 'Selamat Datang di Laravel!',
            'guru'=>$guru
        ];

        // Mengirim data ke view 'index'
        return view('guru/index', $data);

    }    //

    public function create()
    {
        $data = [
            'title'=> 'Tambah Data Guru'
        ];
        return view('guru/create',  $data);
    }

    public function store(Request $request)
    {

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . $foto->hashName();
            $foto->move('image', $fotoName);

            m_guru::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'nip'=> $request->nip,
                'jabatan'=> $request->jabatan,
                'pendidikan'=> $request->pendidikan,
                'alamat'=> $request->alamat,
                'foto'=> $fotoName
            ]);

            return redirect()->route('guru.index');

        }
    }
}
