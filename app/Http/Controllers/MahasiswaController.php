<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // 🔹 TAMPILKAN DATA
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

    // 🔹 FORM TAMBAH
    public function create()
    {
        return view('tambahmahasiswa');
    }

    // 🔹 SIMPAN DATA BARU
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|unique:mahasiswa',
            'kelas' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // 🔹 FORM EDIT
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('editmahasiswa', compact('mhs'));
    }

    // 🔹 UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric|unique:mahasiswa,nim,' . $id,
            'kelas' => 'required',
        ]);

        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui!');
    }

    // 🔹 HAPUS DATA
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus!');
    }
}
