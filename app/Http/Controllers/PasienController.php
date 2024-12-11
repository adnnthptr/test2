<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pasien'] = Pasien::paginate(10); // Pagination untuk data pasien
        $data['judul'] = "Data Pasien";
        return view('pasien_index', $data); // Pastikan view 'pasien_index' ada
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_sp = ['Pasien Baru', 'Pasien Lama']; // Pilihan untuk status pasien
        return view('pasien_create', compact('list_sp')); // Pastikan view 'pasien.create' ada
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'kode_pasien' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'status'      => 'required',
            'alamat'      => 'required'
        ]);

        // Simpan data ke database
        $pasien = new Pasien();
        $pasien->kode_pasien = $validated['kode_pasien'];
        $pasien->nama_pasien = $validated['nama_pasien'];
        $pasien->jenis_kelamin = $validated['jenis_kelamin'];
        $pasien->status = $validated['status'];
        $pasien->alamat = $validated['alamat'];
        $pasien->save();

        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID
        return view('pasien_show', compact('pasien')); // Pastikan view 'pasien_show' ada
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID
        $list_sp = ['Pasien Baru', 'Pasien Lama']; // Pilihan untuk status pasien
        return view('pasien.edit', compact('pasien', 'list_sp')); // Pastikan view 'pasien.edit' ada
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input data
        $validated = $request->validate([
            'kode_pasien' => 'required,' . $id,
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'status'      => 'required',
            'alamat'      => 'required'
        ]);

        // Update data pasien
        $pasien = Pasien::findOrFail($id);
        $pasien->kode_pasien = $validated['kode_pasien'];
        $pasien->nama_pasien = $validated['nama_pasien'];
        $pasien->jenis_kelamin = $validated['jenis_kelamin'];
        $pasien->status = $validated['status'];
        $pasien->alamat = $validated['alamat'];
        $pasien->save();

        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID
        $pasien->delete(); // Hapus data pasien

        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil dihapus!');
    }

    public function laporan()
    {
        $data = [
            'judul' => 'Laporan Data Pasien',
            'pasien' => Pasien::all()
        ];
        return view('pasien_laporan', $data);
    }

}
