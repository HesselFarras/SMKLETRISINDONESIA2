@extends('components.layout')

@section('content')
<section class="bg-gradient-to-br from-amber-50 to-orange-50 py-4">
    <div class="container mx-auto px-4 reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-2xl font-bold text-center mb-10">News & Updates</h2>

        <!-- Hero News with Popup -->
        <div x-data="{ open: false }" class="w-full mb-10 reveal opacity-0 translate-y-8 transition-all duration-700 shadow-xl rounded-xl overflow-hidden bg-white">
            <div @click="open = true" class="cursor-pointer group">
                <div class="relative overflow-hidden">
                    <img src="/images/berita1.jpg" class="w-full h-[70vh] object-cover transition-transform duration-500 group-hover:scale-105" alt="Judul Berita 1">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-4xl font-bold mb-2 leading-tight">Judul Berita 1</h3>
                        <p class="text-sm opacity-90 mb-2">25 Juli 2025</p>
                        <p class="text-base opacity-90 line-clamp-3 max-w-3xl">Deskripsi singkat berita pertama yang menarik minat pembaca untuk mengklik lebih lanjut...</p>
                        <div class="flex items-center mt-3 text-amber-300 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Popup Modal -->
            <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                    <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                        <h3 class="text-xl font-bold text-gray-800">Judul Berita 1</h3>
                        <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                    </div>
                    <div class="overflow-y-auto flex-1">
                        <img src="/images/berita1.jpg" class="w-full h-80 object-cover" alt="Judul Berita 1">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-4">25 Juli 2025</p>
                            <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                <p>Isi lengkap berita pertama ditampilkan di sini. Anda dapat menambahkan beberapa paragraf untuk menjelaskan berita lebih detail sesuai kebutuhan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid News -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 reveal opacity-0 translate-y-8 transition-all duration-700">

            <!-- Berita 2 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/berita2.jpg" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">24 Juli 2025</p>
                        <h3 class="font-bold text-lg mb-2">Judul Berita 2</h3>
                        <p class="text-gray-700 text-sm">Deskripsi singkat dari berita kedua. Tampilkan ringkasan sekitar 2-3 baris teks di sini...</p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita 2 -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">Judul Berita 2</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/berita2.jpg" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">24 Juli 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Isi lengkap berita kedua di sini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita 3 (copy format di atas dan ubah konten) -->

        </div>
    </div>
</section>
@endsection
