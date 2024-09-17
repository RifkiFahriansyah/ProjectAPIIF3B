<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Mahasiswa::with('prodi')->get(); ;
        $data['success'] = true;
        $data['result'] = $fakultas;
        return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:mahasiswas',
            'prodi_id' => 'required',
            'npm' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $result = Mahasiswa::create($validate); //simpan ke tabel mahasiswa
        if($result){
            $data['success'] = true;
            $data['message'] = "Data prodi berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data,Response::HTTP_CREATED);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
