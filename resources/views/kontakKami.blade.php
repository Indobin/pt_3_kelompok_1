<x-app-layout>
 <x-slot name="header">
     <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Kontak Kami') }}
     </h2>
 </x-slot>

 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white shadow-md sm:rounded-lg p-6">
             <h3 class="text-2xl font-bold mb-4 text-center">Kami Siap Membantu Anda!</h3>
             <p class="text-gray-700 text-center mb-6">Jika Anda memiliki pertanyaan atau butuh informasi lebih lanjut, silakan hubungi kami melalui form di bawah ini.</p>
             
             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                 <!-- Form Kontak -->
                 <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                     <h4 class="text-lg font-semibold mb-4">Form Kontak</h4>
                     <form action="" method="POST">
                         @csrf
                         <div class="mb-4">
                             <label for="name" class="block text-gray-700">Nama:</label>
                             <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded-md">
                         </div>
                         <div class="mb-4">
                             <label for="email" class="block text-gray-700">Email:</label>
                             <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md">
                         </div>
                         <div class="mb-4">
                             <label for="message" class="block text-gray-700">Pesan:</label>
                             <textarea id="message" name="message" rows="4" required class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                         </div>
                         <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 transition duration-300">Kirim Pesan</button>
                     </form>
                 </div>

                 <!-- Informasi Kontak -->
                 <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                     <h4 class="text-lg font-semibold mb-4">Informasi Kontak</h4>
                     <p class="mb-2"><strong>Alamat:</strong> Jl. Singosari No. 32, Jember</p>
                     <p class="mb-2"><strong>Email:</strong> Satyabr67@gmail.com</p>
                     <p class="mb-2"><strong>Telepon:</strong> (021) 1234-5678</p>
                     <p class="mb-2"><strong>Jam Kerja:</strong> Senin - Jumat, 09:00 - 17:00</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
</x-app-layout>
