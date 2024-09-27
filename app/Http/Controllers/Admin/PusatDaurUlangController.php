<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RecyleRequest;
use App\Models\RecyleCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
            'center' => new RecyleCenter(),
            'page_meta' => [
                'url' => route('PusatDaurUlang.store'),
                'title' => 'Tambah Data',
                'sub_title' => 'Tambah Data',
                'description' => 'You can nsnsnsns',
                'submit_text' => 'Kirim',
                'method' => 'post',
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecyleRequest $request)
    {
    if ($request->hasFile('gambar')) {
       
        $filePath = $request->file('gambar')->store('image/recyle');

        $filePath = str_replace('public/', '', $filePath);
    } else {
        $filePath = null;
    }
    
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
    public function edit(RecyleCenter $center)
    {
        \Log::info('Editing RecyleCenter with ID: ' . $center->id);
        return view('admin.daurUlang.form', [
            'center' => $center,
            'page_meta' => [
                'url' => route('PusatDaurUlang.update', $center->id),
                'title' => 'Edit Data',
                'sub_title' => 'Edit Data',
                'description' => ' center details.',
                'submit_text' => 'Simpan',
                'method' => 'put', 
            ]
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(RecyleRequest $request, RecyleCenter $center)
    {
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($center->gambar) {
                $oldImage = storage_path('app/public/' . $center->gambar);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
    
            // Simpan gambar baru
            $filePath = $request->file('gambar')->store('image/recyle');
            $filePath = str_replace('public/', '', $filePath);
            $center->gambar = $filePath;
        }
    
        // Update field lainnya
        $center->name = $request->name;
        $center->lokasi = $request->lokasi;
        $center->kontak_info = $request->kontak_info;
        $center->deskripsi = $request->deskripsi;
        $center->save();
        return to_route('PusatDaurUlang.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecyleCenter $center)
    {
        // Logging untuk memverifikasi data
    \Log::info('Deleting RecyleCenter ID: ' . $center->id);
    $imagePath = storage_path('app/public/' . $center->gambar);

    // Hapus file gambar jika ada
    if (file_exists($imagePath)) {
        unlink($imagePath);
        // dd($imagePath);
    }
    $center->delete(); // Menghapus data
    return redirect()->route('PusatDaurUlang.index')->with('success', 'Pusat Daur Ulang berhasil dihapus.');
    }
}
