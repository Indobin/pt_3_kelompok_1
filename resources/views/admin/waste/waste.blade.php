<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Limbah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <x-primary-button>
                            <a href="#" >
                                Tambah Data
                            </a>
                        </x-primary-button>
                    </div>
                    <x-table>
                        <thead>
                            <tr class="bg-gray-200">
                                <x-table.th>ID</x-table.th>
                                <x-table.th>Nama</x-table.th>
                                <x-table.th>Tipe</x-table.th>
                                <x-table.th>Kuantitas</x-table.th>
                                <x-table.th>Tanggal Pengambilan</x-table.th>
                                <x-table.th>User ID</x-table.th>
                                <x-table.th>Recycle Center ID</x-table.th>
                                <th class=" text-gray-900 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <x-table.tbody>
                            <x-table.tr>
                                <x-table.td>1</x-table.td>
                                <x-table.td>Sampah Plastik</x-table.td>
                                <x-table.td>Plastik</x-table.td>
                                <x-table.td>50 kg</x-table.td>
                                <x-table.td>2024-09-30</x-table.td>
                                <x-table.td>101</x-table.td>
                                <x-table.td>202</x-table.td>
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
                                <x-table.td>Sampah Kertas</x-table.td>
                                <x-table.td>Kertas</x-table.td>
                                <x-table.td>30 kg</x-table.td>
                                <x-table.td>2024-10-01</x-table.td>
                                <x-table.td>102</x-table.td>
                                <x-table.td>203</x-table.td>
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
