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


                        <!-- Field Title -->
                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Judul Postingan')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" value="{{ old('title') }}" name="title"/>
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Field Content -->
                        <div class="mb-6">
                            <x-input-label for="content" :value="__('Konten')" />
                            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <!-- Field Status -->
                        <div class="mb-6">
                            <select class="form-control" id="status" name="status" :value="__('Status')" />
                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                        </div>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
