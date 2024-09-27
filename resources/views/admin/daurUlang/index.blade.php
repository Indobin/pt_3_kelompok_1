<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pusat Daur Ulang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Daftar Pusat Daur Ulang</h3>
                      

                        <x-primary-button>
                            <a href="{{ route('PusatDaurUlang.create') }}" >
                                Tambah Data
                            </a>
                        </x-primary-button>
                        
                        
                    </div>
                    @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: '{{ session('success') }}',
                            timer: 2000, // durasi alert ditampilkan
                            showConfirmButton: false
                        });
                    </script>
                @endif
                
                    <!-- Tabel Pusat Daur Ulang -->
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">No</th>
                                <th class="py-3 px-6 text-left">Nama Pusat</th>
                                <th class="py-3 px-6 text-left">Foto</th>
                                <th class="py-3 px-6 text-left">Lokasi</th>
                                <th class="py-3 px-6 text-left">Kontak</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @foreach ($recyclingCenters as $center)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">{{ $loop->iteration}}</td>
                                    <td class="py-3 px-6 text-left">{{ $center->name }}</td>
                                    <td class="py-3 px-6 text-left">
                                        <img src="{{asset('storage/' .$center->gambar)}}" class="rounded" style="width: 150px">
                                    </td>
                                    <td class="py-3 px-6 text-left">{{ $center->lokasi }}</td>
                                    <td class="py-3 px-6 text-left">{{ $center->kontak_info }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <!-- Button Edit -->
                                        <x-edit-button>
                                            <a href="{{ route('PusatDaurUlang.edit', $center->id ) }}">
                                                Edit
                                            </a>
    
                                        </x-edit-button>
                                        
                                        <!-- Button Delete -->
                                        {{-- <p>ID Pusat Daur Ulang: {{ $center->id }}</p> --}}
<form action="{{ route('PusatDaurUlang.hapus', $center->id) }}" method="POST" class="inline-block">
    @csrf
    @method('DELETE')
    <x-danger-button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus pusat ini?')">
        Hapus
    </x-danger-button>
</form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination (optional) -->
                    {{-- <div class="mt-4">
                        {{ $center->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
