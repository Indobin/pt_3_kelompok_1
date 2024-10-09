<?php

namespace Database\Seeders;

use App\Models\Karbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKarbonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Menambahkan beberapa jenis sampah dan faktor emisi ke tabel waste_types
        $TipeKarbon = [
            ['jenis' => 'plastik', 'metode_pembuangan' => 'landfill', 'faktor_emisi' => 6],
            ['jenis' => 'plastik', 'metode_pembuangan' => 'recycled', 'faktor_emisi' => 2],
            ['jenis' => 'kertas', 'metode_pembuangan' => 'landfill', 'faktor_emisi' => 3.5],
            ['jenis' => 'kertas', 'metode_pembuangan' => 'recycled', 'faktor_emisi' => 1.5],
            ['jenis' => 'kaca', 'metode_pembuangan' => 'landfill', 'faktor_emisi' => 1.2],
            ['jenis' => 'kaca', 'metode_pembuangan' => 'recycled', 'faktor_emisi' => 0.5],
            ['jenis' => 'logam', 'metode_pembuangan' => 'landfill', 'faktor_emisi' => 9],
            ['jenis' => 'logam', 'metode_pembuangan' => 'recycled', 'faktor_emisi' => 2.5],
            ['jenis' => 'organik', 'metode_pembuangan' => 'landfill', 'faktor_emisi' => 1.9],
            ['jenis' => 'organik', 'metode_pembuangan' => 'composted', 'faktor_emisi' => 0.6],
        ];

        foreach ($TipeKarbon as $Tipekarbon) {
            Karbon::create($Tipekarbon);
        }
    }
}
