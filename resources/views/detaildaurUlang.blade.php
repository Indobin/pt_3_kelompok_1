<x-app-layout>
 {{-- <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Detail Tempat Daur Ulang') }}
     </h2>
 </x-slot> --}}
 <div class="pt-20 pb-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900">
                 <div class="flex flex-col lg:flex-row">
                     <!-- Gambar Besar -->
                     <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                         <img src="{{ asset('storage/' . $center->gambar) }}" alt="{{ $center->name }}" class="object-cover w-full h-full rounded-lg shadow-lg">
                     </div>
                     
                     <!-- Detail Informasi -->
                     <div class="lg:w-1/2 w-full lg:pl-10">
                         <header class="mb-4">
                             <h1 class="text-3xl font-bold mb-2">{{ $center->name }}</h1>
                             <p class="text-gray-600"> {!! ($center->deskripsi) !!}</p>
                         </header>

                         <!-- Informasi Kontak -->
                         <div class="mt-6">
                             <h2 class="text-xl font-semibold mb-3">Informasi Kontak</h2>
                             <p class="text-gray-700"><strong>Alamat:</strong> {{ $center->lokasi }}</p>
                             <p class="text-gray-700"><strong>Telepon:</strong> {{ $center->kontak_info }}</p>
                             <p class="text-gray-700"><strong>Email:</strong> lokotere@gmail.com </p>
                         </div>

                         <!-- Informasi Tambahan -->
                         <div class="mt-6">
                             <h2 class="text-xl font-semibold mb-3">Jam Operasional</h2>
                             <p class="text-gray-700"></p>
                         </div>

                         <!-- Tombol Kembali -->
                         <div class="mt-8">
                             <a href="{{ route('DaurUlang') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                                 Kembali
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</x-app-layout>
