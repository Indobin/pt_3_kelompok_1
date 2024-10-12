<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <x-primary-button>
                            <a href="{{route('admin.blog.create')}}">
                                Tambah Blog
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
                            <tr class="bg-gray-200">
                                <x-table.th>No</x-table.th>
                                <x-table.th>Judul</x-table.th>
                                <x-table.th>Konten</x-table.th>
                                <x-table.th>Tanggal Dibuat</x-table.th>
                                <th class="text-gray-900 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <x-table.tbody>
                            @foreach ($blog as $blogs)
                            <x-table.tr>
                            
                                    
                                <x-table.td>{{$loop->iteration}}</x-table.td>
                                <x-table.td>{{$blogs->title}}</x-table.td>
                                <x-table.td>{!! \Illuminate\Support\Str::limit($blogs->content, 40) !!}</x-table.td>
                                <x-table.td>{{ $blogs->created_at->format('d M Y') }}</x-table.td>
                                <td class="py-3 px-6 text-center">
                                    <x-edit-button>
                                        <a href="{{ route('admin.blog.edit', $blogs->id ) }}">
                                            Edit
                                        </a>

                                    </x-edit-button>
                                    <form action="{{ route('admin.blog.destroy', $blogs->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus pusat ini?')">
                                            Hapus
                                        </x-danger-button>
                                </td>
                             
                            </x-table.tr>
                            @endforeach
                        </x-table.tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
