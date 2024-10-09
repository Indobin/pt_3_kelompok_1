<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tempat Daur Ulang') }}
        </h2>
    </x-slot> --}}
    <div class="pt-20 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    {{-- <section class="pt-20 pb-12 bg-gray-100 w-full"> --}}
{{--       
            <h1 class="text-2xl font-semibold mb-6 text-left mt-4">Our Blog</h1> --}}

            <!-- Grid container untuk card blog -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($recyclingCenters as $data)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
                        <!-- Gambar Blog -->
                        <div class="h-48 w-full bg-gray-200 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->title }}" class="object-cover h-full w-full">
                        </div>

                        <!-- Informasi Blog -->
                        <div class="p-4">
                            <header class="mb-2">
                                <h3 class="text-lg font-bold">{{ $data->name }}</h3>
                            </header>
                            <p class="text-gray-700 text-sm mb-4 truncate-multiline">
                                {{ Str::limit($data->deskripsi, 100) }}
                            </p>
                            <div class="flex justify-between space-x-2">
                                <a href="{{route('DaurUlang.detail', $data->id)}}" class="mt-4 inline-block text-blue-600 hover:underline">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
</x-app-layout>
