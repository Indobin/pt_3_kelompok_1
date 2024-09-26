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
                    <!-- Button Tambah -->
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Daftar Pusat Daur Ulang</h3>
                        <x-primary-button>
                            <a href="{{ route('PusatDaurUlang.create') }}" >
                                Tambah Data
                            </a>
                        </x-primary-button>
                        
                        
                    </div>

                    <!-- Tabel Pusat Daur Ulang -->
                    {{-- <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Nama Pusat</th>
                                <th class="py-3 px-6 text-left">Lokasi</th>
                                <th class="py-3 px-6 text-left">Kontak</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @foreach ($recycleCenters as $center)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">{{ $center->name }}</td>
                                    <td class="py-3 px-6 text-left">{{ $center->location }}</td>
                                    <td class="py-3 px-6 text-left">{{ $center->contact }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <!-- Button Edit -->
                                        <a href="{{ route('admin.recycleCenter.edit', $center->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                            Edit
                                        </a>
                                        <!-- Button Delete -->
                                        <form action="{{ route('admin.recycleCenter.destroy', $center->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus pusat ini?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination (optional) -->
                    <div class="mt-4">
                        {{ $recycleCenters->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
