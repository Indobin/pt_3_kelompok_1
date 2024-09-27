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
                    <x-table>
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <x-table.th>No</x-table.th>
                                <x-table.th>Nama Pusat</x-table.th>
                                <x-table.th>Foto</x-table.th>
                                <x-table.th>Lokasi</x-table.th>
                                <x-table.th>Kontak</x-table.th>
                                <th class="text-center  text-gray-900">Aksi</th>
                            </tr>
                        </thead>
                        <x-table.tbody class="text-gray-700 text-sm">
                            @foreach ($recyclingCenters as $center)
                                <x-table.tr class="">
                                    <x-table.td>{{ $loop->iteration}}</x-table.td>
                                    <x-table.td>{{ $center->name }}</x-table.td>
                                    <x-table.td>
                                        <img src="{{asset('storage/' .$center->gambar)}}" class="rounded" style="width: 150px">
                                    </x-table.td>
                                    <x-table.td>{{ $center->lokasi }}</x-table.td>
                                    <x-table.td>{{ $center->kontak_info }}</x-table.td>
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
                                </x-table.tr>
                            @endforeach
                        </x-table.tbody>
                    </x-table>

                    <!-- Pagination (optional) -->
                    {{-- <div class="mt-4">
                        {{ $center->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
