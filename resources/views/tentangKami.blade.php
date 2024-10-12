<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot> --}}

    <!-- Gambar Full Besar -->
    <div class="relative">
        <img src="https://th.bing.com/th/id/OIP.AxM5qg8eujzneSaQgUkMQQHaDe?w=350&h=164&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Sampah Daur Ulang" class="w-full h-200 object-cover">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold text-center">Bersama Kita Daur Ulang Sampah untuk Masa Depan yang Lebih Baik</h1>
        </div>
    </div>

    <!-- Konten Tentang Kami -->
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden ">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Tentang Aplikasi Kami</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <p>
                                Aplikasi ini dibuat dengan tujuan untuk membantu pengelolaan dan pendaurulangan sampah dengan lebih efektif. Kami percaya bahwa dengan teknologi, kita dapat mengurangi dampak negatif sampah terhadap lingkungan dan mendukung keberlanjutan.
                            </p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <p>
                                Dalam aplikasi ini, Anda dapat menemukan berbagai fitur untuk mengelola sampah, termasuk mengelola jenis-jenis sampah, pusat daur ulang, serta memberikan laporan mengenai jumlah sampah yang telah diolah.
                            </p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <p>
                                Mari bersama-sama menjaga lingkungan dengan mendaur ulang sampah dan mengurangi limbah yang merusak bumi kita.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Misi -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center mb-12 ">
            <div class="bg-green-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> <!-- Tambahkan mb-12 untuk jarak dengan footer -->
            <h3 class="text-3xl font-bold text-green-800 mb-6">Misi Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-xl text-gray-700">
                        Misi kami adalah untuk mendidik dan mendorong masyarakat agar lebih sadar tentang pentingnya mendaur ulang sampah. Kami ingin menciptakan dunia yang lebih hijau, bersih, dan sehat bagi generasi yang akan datang.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-xl text-gray-700">
                        Dengan aplikasi ini, kami berharap bisa memudahkan semua orang untuk mengelola sampah mereka dengan cara yang benar dan berdampak positif bagi lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
