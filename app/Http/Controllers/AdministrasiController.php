<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $data['administrasi'] = \App\Models\Administrasi::paginate(5);
    $data['judul'] = 'Data-data Administrasi';

    return view('administrasi_index', $data);
}

public function create()
{
    $data['list_pasien'] = \App\Models\Pasien::selectRaw("id, concat(kode_pasien, '-', nama_pasien) as tampil")
        ->pluck('tampil', 'id');

    $data['list_dokter'] = \App\Models\Dokter::selectRaw("id, concat(kode_dokter, '-', nama_dokter) as tampil")
        ->pluck('tampil', 'id');

    // Kembali ke view create dengan data yang telah diolah
    return view('administrasi_create', $data);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'tanggal' => 'require',
            'pasien_id' => 'require',
            'dokter_id' => 'require',
            'biaya' => 'require'
       ]);

       $adminisitrasi = new \App\Models\Administrasi();
       $adminisitrasi->tanggal = $request->tanggal;
       $adminisitrasi->pasien_id = $request->pasien_id;
       $adminisitrasi->dokter_id = $request->dokter_id;
       $adminisitrasi->biaya = $request->biaya;
       $adminisitrasi->save();

       return back()->with('pesan', 'Data sudah disimpan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
