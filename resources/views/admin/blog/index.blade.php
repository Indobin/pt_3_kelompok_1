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
                            <a href="#">
                                Tambah Blog
                            </a>
                        </x-primary-button>
                    </div>
                    <x-table>
                        <thead>
                            <tr class="bg-gray-200">
                                <x-table.th>ID</x-table.th>
                                <x-table.th>Judul</x-table.th>
                                <x-table.th>Konten</x-table.th>
                                <x-table.th>Tanggal Dibuat</x-table.th>
                                <th class="text-gray-900 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <x-table.tbody>
                            <x-table.tr>
                                <x-table.td>1</x-table.td>
                                <x-table.td>Pentingnya Daur Ulang</x-table.td>
                                <x-table.td>Artikel tentang pentingnya daur ulang...</x-table.td>
                                <x-table.td>2024-09-30</x-table.td>
                                <td class="py-3 px-6 text-center">
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                                    </form>
                                </td>
                            </x-table.tr>
                            <x-table.tr>
                                <x-table.td>2</x-table.td>
                                <x-table.td>Cara Memilah Sampah</x-table.td>
                                <x-table.td>Tutorial memisahkan sampah organik dan non-organik...</x-table.td>
                                <x-table.td>2024-10-01</x-table.td>
                                <td class="py-3 px-6 text-center">
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                                    </form>
                                </td>
                            </x-table.tr>
                        </x-table.tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
