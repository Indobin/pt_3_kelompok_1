<x-app-layout>
    <div class="pt-20 pb-12">
    <div class="container mx-auto max-w-2xl p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-green-600 mb-6">Hasil Perhitungan Jejak Karbon</h2>

        <div class="mb-4">
            <p class="text-lg">Total Emisi Harian: <strong class="text-green-700">{{ $totalEmissions }} kg CO2e</strong></p>
            <p class="text-lg">Total Emisi Mingguan: <strong class="text-green-700">{{ $emissionsPerWeek }} kg CO2e</strong></p>
            <p class="text-lg">Total Emisi Bulanan: <strong class="text-green-700">{{ $emissionsPerMonth }} kg CO2e</strong></p>
            <p class="text-lg">Total Emisi Tahunan: <strong class="text-green-700">{{ $emissionsPerYear }} kg CO2e</strong></p>
        </div>

        @if($mitigationMessage)
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg mb-6">
                {{ $mitigationMessage }}
            </div>
        @endif

        <h3 class="text-xl font-semibold text-center text-green-600 mb-4">Detail Input Sampah</h3>
        <table class="w-full table-auto bg-gray-100 rounded-lg shadow">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="p-2 text-left">Jenis Sampah</th>
                    <th class="p-2 text-left">Berat (kg)</th>
                    <th class="p-2 text-left">Metode Pengelolaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wastes as $waste)
                <tr class="border-t">
                    {{-- @dd($waste) --}}
                    <td class="p-2">{{ ucfirst($waste['type']) }}</td>
                    <td class="p-2">{{ $waste['weight'] }} kg</td>
                    <td class="p-2">{{ ucfirst($waste['disposal']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6 flex justify-center">
            <a href="{{ route('Karbon') }}" class="bg-green-600 text-white py-2 px-4 rounded-lg shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">Hitung Lagi</a>
        </div>
    </div>
    </div>
</x-app-layout>
