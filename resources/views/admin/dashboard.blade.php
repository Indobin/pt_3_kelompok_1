<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Statistik Utama</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex items-center">
                        <div class="text-green-500 text-3xl mr-4">
                            <i class="fas fa-recycle"></i> <!-- Ganti dengan ikon yang sesuai -->
                        </div>
                        <div>
                            <h4 class="font-semibold">Jumlah Pusat Daur Ulang</h4>
                            <p class="text-gray-600">5</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex items-center">
                        <div class="text-blue-500 text-3xl mr-4">
                            <i class="fas fa-users"></i> <!-- Ganti dengan ikon yang sesuai -->
                        </div>
                        <div>
                            <h4 class="font-semibold">Jumlah Pengguna</h4>
                            <p class="text-gray-600">150</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex items-center">
                        <div class="text-red-500 text-3xl mr-4">
                            <i class="fas fa-trash"></i> <!-- Ganti dengan ikon yang sesuai -->
                        </div>
                        <div>
                            <h4 class="font-semibold">Sampah Dikelola</h4>
                            <p class="text-gray-600">1200 kg</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex items-center">
                        <div class="text-yellow-500 text-3xl mr-4">
                            <i class="fas fa-chart-pie"></i> <!-- Ganti dengan ikon yang sesuai -->
                        </div>
                        <div>
                            <h4 class="font-semibold">Statistik Daur Ulang</h4>
                            <p class="text-gray-600">75% Daur Ulang Berhasil</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-lg font-bold mb-4">Grafik Pie</h3>
                    <canvas id="myPieChart"></canvas> <!-- Tempat untuk grafik pie -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        // Contoh data untuk grafik pie
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Daur Ulang', 'Sampah', 'Lainnya'],
                datasets: [{
                    label: 'Statistik Daur Ulang',
                    data: [75, 20, 5],
                    backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</x-app-layout>
