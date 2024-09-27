<x-app-layout title="{{ $page_meta['title'] }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page_meta['title'] }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ $page_meta['url'] }}" method="post" enctype="multipart/form-data" novalidate>
                        @method($page_meta['method'])
                        @csrf

                        <!-- Field Gambar -->
                        <div class="mb-6">
                            <x-input-label for="gambar" :value="__('Foto Tempat')" />
                            <input type="file" name="gambar" id="gambar" />
                            <!-- Display existing image if available -->
                            @if($center->gambar)
                                <img src="{{ asset('storage/' . $center->gambar) }}" alt="Gambar Tempat" class="mt-2" width="150">
                            @endif
                            <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                        </div>

                        <!-- Field Name -->
                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" value="{{ old('name', $center->name) }}" name="name"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Field Lokasi -->
                        <div class="mb-6">
                            <x-input-label for="lokasi" :value="__('Lokasi')" />
                            <x-text-input id="lokasi" class="block mt-1 w-full" type="text" value="{{ old('lokasi', $center->lokasi) }}" name="lokasi"/>
                            <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                        </div>

                        <!-- Field Kontak Info -->
                        <div class="mb-6">
                            <x-input-label for="kontak_info" :value="__('Kontak Info')" />
                            <x-text-input id="kontak_info" class="block mt-1 w-full" type="text" value="{{ old('kontak_info', $center->kontak_info) }}" name="kontak_info"/>
                            <x-input-error :messages="$errors->get('kontak_info')" class="mt-2" />
                        </div>

                        <!-- Field Deskripsi -->
                        <div class="mb-6">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <x-text-area id="deskripsi" class="block mt-1 w-full" name="deskripsi">{{ old('deskripsi', $center->deskripsi) }}</x-text-area>
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>

                        <!-- Submit Button -->
                        <x-primary-button>
                            {{ $page_meta['submit_text'] }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
