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
                            <x-table.tr>
                                @foreach ($blog as $blogs)
                                    
                              
                                <x-table.td>{{$loop->iteration}}</x-table.td>
                                <x-table.td>{{$blogs->title}}</x-table.td>
                                <x-table.td>{{$blogs->content}}</x-table.td>
                                <x-table.td>j</x-table.td>
                                <td class="py-3 px-6 text-center">
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                                    </form>
                                </td>
                                @endforeach
                            </x-table.tr>
                            
                        </x-table.tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
