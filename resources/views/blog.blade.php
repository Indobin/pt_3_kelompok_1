<x-app-layout>
 {{-- <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Blog') }}
     </h2>
 </x-slot> --}}
 <div class="pt-20 pb-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900">
                 <h3 class="text-2xl font-bold mb-4">Artikel Terbaru</h3>
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($blogs as $data)
                        
             
                     <div class="bg-gray-100 p-4 rounded-lg shadow">
                         <h4 class="font-semibold text-lg mb-2">{{$data->title}}</h4>
                         <p class="text-sm text-gray-600 mb-4">Diterbitkan pada {{$data->created_at->format('d M Y') }}</p>
                         <p class="text-gray-700">
                            {!! \Illuminate\Support\Str::limit($data->content, 70) !!}
                         </p>
                         <a href="{{route('blog.show', $data->id)}}" class="mt-4 inline-block text-blue-600 hover:underline">Baca selengkapnya</a>
                     </div>

                    @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
</x-app-layout>
