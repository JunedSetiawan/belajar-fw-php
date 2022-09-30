<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('welcome', compact('mahasiswa'));
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $mahasiswa = DB::table('mahasiswa')
            ->where('nama', 'like', "%" . $cari . "%")
            ->Where('nrp', 'like', "%" . $cari . "%")
            ->Where('prodi', 'like', "%" . $cari . "%")
            ->get();
        return view('welcome', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'prodi' => $request->prodi
        ]);

        return redirect()->back()->with('tambah', 'Berhasil Tambah Data');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $user = DB::table('mahasiswa')->where('id', $id)->first();

        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'prodi' => $request->prodi
        ]);

        return redirect('/')->with('edit', 'Berhasil Update Data');
    }


    public function delete($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();

        return redirect()->back()->with('hapus', 'Berhasil Menghapus Data');
    }
}
