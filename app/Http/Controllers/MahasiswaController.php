<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Menampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', [
            "title" => "Data Mahasiswa",
            "mahasiswas" => $mahasiswas
        ]);
    }

    // Menampilkan form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa_create', [
            "title" => "Tambah Mahasiswa"
        ]);
    }

    // Menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|unique:mahasiswas',
            'email' => 'nullable|email|unique:mahasiswas',
            'jurusan' => 'nullable|string|max:100',
            'alamat' => 'nullable|string|max:255'
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // Menampilkan detail mahasiswa
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa_show', [
            "title" => "Detail Mahasiswa",
            "mahasiswa" => $mahasiswa
        ]);
    }

    // Menampilkan form edit mahasiswa
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa_edit', [
            "title" => "Edit Mahasiswa",
            "mahasiswa" => $mahasiswa
        ]);
    }

    // Update data mahasiswa
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|unique:mahasiswas,nim,' . $mahasiswa->id,
            'email' => 'nullable|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'jurusan' => 'nullable|string|max:100',
            'alamat' => 'nullable|string|max:255'
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // Hapus data mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
