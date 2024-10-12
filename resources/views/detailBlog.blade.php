<x-app-layout>
    <div class="pt-20 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col lg:flex-row">
                        
                        <!-- Detail Informasi Blog -->
                        <div class="w-full">
                            <header class="mb-4">
                                <!-- Judul Blog -->
                                <h1 class="text-3xl font-bold mb-2">{{ $blogs->title }}</h1>
                                <!-- Tanggal Dibuat -->
                                <p class="text-gray-600 mb-4">Ditulis pada {{ $blogs->created_at->format('d M Y') }}</p>
                                <!-- Isi Blog -->
                                <div class="prose max-w-none">
                                    {!! ($blogs->content) !!}
                                </div>
                            </header>
                        </div>
                    </div>

                    <!-- Tombol Kembali -->
                    <div class="mt-8">
                        <a href="{{ route('Blogg') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                           Kembali 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
