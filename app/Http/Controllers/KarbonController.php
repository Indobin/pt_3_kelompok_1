<?php

namespace App\Http\Controllers;

use App\Http\Requests\KarbonRequest;
use App\Models\Karbon;
use Illuminate\Http\Request;

class KarbonController extends Controller
{
    public function index()
    {
        return view('karbon.index');
    }
    public function kalkulasi(KarbonRequest $request)
    {
        $validatedData = $request->validated();  // Mengambil data yang sudah divalidasi
    
        $totalEmissions = 0;
        $threshold = 50; // Ambang batas untuk mitigasi
    
        // Looping untuk menghitung jejak karbon setiap jenis sampah
        foreach ($validatedData['wastes'] as $index => $wasteData) {
            // Cari data waste type di database
            $wasteType = Karbon::where('jenis', $wasteData['type'])
                ->where('metode_pembuangan', $wasteData['disposal'])
                ->first();
    
            // Jika data tidak ditemukan, tampilkan pesan error
            if (!$wasteType) {
                return back()->withErrors("Jenis sampah atau metode pembuangan tidak valid untuk tipe: {$wasteData['type']} dan metode: {$wasteData['disposal']}");
            }
    
            // Kalkulasi emisi untuk sampah ini
            $emissionsForThisWaste = $wasteType->faktor_emisi * $wasteData['weight'];
    
            // Akumulasi total emisi
            $totalEmissions += $emissionsForThisWaste;
        }
    
        // Hitung emisi perminggu, perbulan, dan pertahun
        $emissionsPerWeek = $totalEmissions * 7;
        $emissionsPerMonth = $totalEmissions * 30;
        $emissionsPerYear = $totalEmissions * 365;
    
        // Cek apakah emisi harian melebihi ambang batas
        $mitigationMessage = null;
        if ($totalEmissions > $threshold) {
            $mitigationMessage = "Emisi harian Anda melebihi ambang batas yang disarankan. Pertimbangkan untuk melakukan mitigasi atau pengurangan.";
        }
    
        // Mengirim data ke view
        return view('karbon.detail', [
            'totalEmissions' => $totalEmissions,
            'emissionsPerWeek' => $emissionsPerWeek,
            'emissionsPerMonth' => $emissionsPerMonth,
            'emissionsPerYear' => $emissionsPerYear,
            'mitigationMessage' => $mitigationMessage,
            'wastes' => $validatedData['wastes']  // Kirimkan detail inputan user
        ]);
    }
    
}
