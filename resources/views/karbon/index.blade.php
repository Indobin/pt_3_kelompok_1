<x-app-layout>
    <div class="pt-20 pb-12">
    <div class="container mx-auto max-w-xl p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-green-600 mb-6">Hitung Jejak Karbon Sampah</h2>
        <form action="{{ route('Karbon.kalkulasi') }}" method="POST" class="space-y-4">
            @csrf

            <div id="waste-inputs">
                <div class="waste-group space-y-4">
                    <div>
                        <label class="block font-medium text-gray-700">Jenis Sampah:</label>
                        <select name="wastes[0][type]" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            <option value="plastik">Plastik</option>
                            <option value="kertas">Kertas</option>
                            <option value="kaca">Kaca</option>
                            <option value="logam">Logam</option>
                            <option value="organik">Organik</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Berat (kg):</label>
                        <input type="number" name="wastes[0][weight]" step="0.1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Metode Pengelolaan:</label>
                        <select name="wastes[0][disposal]" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            <option value="landfill">TPA</option>
                            <option value="recycled">Daur Ulang</option>
                            <option value="composted">Kompos</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-between mt-6">
                <button type="button" id="add-more" class="bg-green-500 text-white py-2 px-4 rounded-lg shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">Tambah Sampah</button>
                <button type="submit" class="bg-green-700 text-white py-2 px-4 rounded-lg shadow hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-400">Hitung Jejak Karbon</button>
            </div>
        </form>
    </div>
</div>
    <script>
        let wasteCount = 1;

        document.getElementById('add-more').addEventListener('click', function() {
            const newWasteGroup = document.querySelector('.waste-group').cloneNode(true);
            newWasteGroup.querySelectorAll('select, input').forEach(function(input) {
                input.name = input.name.replace(/\[\d+\]/, `[${wasteCount}]`);
                input.value = ''; // Reset nilai input
            });
            document.getElementById('waste-inputs').appendChild(newWasteGroup);
            wasteCount++;
        });
    </script>
</x-app-layout>