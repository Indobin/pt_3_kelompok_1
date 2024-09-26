<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang Kami') }}
        </h2>
    </x-slot>

    <!-- Gambar Full Besar -->
    <div class="relative">
        <img src="https://th.bing.com/th/id/OIP.AxM5qg8eujzneSaQgUkMQQHaDe?w=350&h=164&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Sampah Daur Ulang" class="w-full h-200 object-cover">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Bersama Kita Daur Ulang Sampah untuk Masa Depan yang Lebih Baik</h1>
        </div>
    </div>

    <!-- Konten Tentang Kami -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Tentang Aplikasi Kami</h3>
                    <p>
                        Aplikasi ini dibuat dengan tujuan untuk membantu pengelolaan dan pendaurulangan sampah dengan lebih efektif. Kami percaya bahwa dengan teknologi, kita dapat mengurangi dampak negatif sampah terhadap lingkungan dan mendukung keberlanjutan.
                    </p>
                    <p class="mt-4">
                        Dalam aplikasi ini, Anda dapat menemukan berbagai fitur untuk mengelola sampah, termasuk mengelola jenis-jenis sampah, pusat daur ulang, serta memberikan laporan mengenai jumlah sampah yang telah diolah.
                    </p>
                    <p class="mt-4">
                        Mari bersama-sama menjaga lingkungan dengan mendaur ulang sampah dan mengurangi limbah yang merusak bumi kita.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Misi -->
    <div class="py-12 bg-green-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <h3 class="text-3xl font-bold text-green-800 mb-6">Misi Kami</h3>
            <p class="text-xl text-gray-700 mb-4">
                Misi kami adalah untuk mendidik dan mendorong masyarakat agar lebih sadar tentang pentingnya mendaur ulang sampah. Kami ingin menciptakan dunia yang lebih hijau, bersih, dan sehat bagi generasi yang akan datang.
            </p>
            <p class="text-xl text-gray-700">
                Dengan aplikasi ini, kami berharap bisa memudahkan semua orang untuk mengelola sampah mereka dengan cara yang benar dan berdampak positif bagi lingkungan.
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} Aplikasi Daur Ulang Sampah. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</x-app-layout>
