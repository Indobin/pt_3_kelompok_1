<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RecyleRequest;
use App\Models\RecyleCenter;
use Illuminate\Http\Request;

class PusatDaurUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recyclingCenters = RecyleCenter::latest()->paginate(10);
        return view('admin.daurUlang.index',[
            'recyclingCenters' => $recyclingCenters,
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.daurUlang.form',[
            'recyle' => new RecyleCenter(),
            'page_meta' => [
                'url' => route('PusatDaurUlang.store'),
                'title' => 'Tambah Data',
                'sub_title' => 'Tambah Data',
                'description' => 'You can nsnsnsns',
                'submit_text' => 'Create',
                'method' => 'post',
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecyleRequest $request)
    {
        //   $file = $request->file('gambar');
        //   $request->RecyleCenter()->create([
        //       ...$request->validated(),
        //       ...['gambar' => $file->store('image/recyle')],
        //   ]);
        //   return to_route('PusatDaurUlang.index');
        // Mengambil file gambar dari request
          // Proses upload file jika ada
    if ($request->hasFile('gambar')) {
        // Simpan file gambar ke storage/public/image/recyle
        $filePath = $request->file('gambar')->store('image/recyle');
        // Hapus 'public/' dari path untuk disimpan di database
        $filePath = str_replace('public/', '', $filePath);
    } else {
        $filePath = null; // Jika gambar tidak diupload
    }
        // Membuat record baru di RecyleCenter dengan data yang divalidasi
        RecyleCenter::create([
            'gambar' => $filePath,
            'name' => $request->name,
            'lokasi' => $request->lokasi,
            'kontak_info' => $request->kontak_info,
            'deskripsi' => $request->deskripsi,
        ]);

        // Mengarahkan kembali ke route setelah sukses
        return to_route('PusatDaurUlang.index')->with('success', 'Data berhasil ditambahkan!');
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
