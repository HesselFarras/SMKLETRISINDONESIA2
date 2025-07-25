@extends('components.layout')

@section('content')
<section class="bg-gradient-to-br from-amber-50 to-orange-50 py-4">
    <div class="container mx-auto px-4 reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-2xl font-bold text-center mb-10">News & Updates</h2>

        <!-- Hero News with Popup -->
        <div x-data="{ open: false }" class="w-full mb-10 reveal opacity-0 translate-y-8 transition-all duration-700 shadow-xl rounded-xl overflow-hidden bg-white">
            <div @click="open = true" class="cursor-pointer group">
                <div class="relative overflow-hidden">
                    <img src="/images/kingramdan.jpg" class="w-full h-[70vh] object-cover transition-transform duration-500 group-hover:scale-105" alt="Judul Berita 1">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-4xl font-bold mb-2 leading-tight">Siswa SMK LETRIS INDONESIA 2 Menjadi juara LKS Tingkat Provinsi</h3>
                        <p class="text-sm opacity-90 mb-2">23 July 2025</p>
                        <p class="text-base opacity-90 line-clamp-3 max-w-3xl">Selamat untuk Ramdani Sunarto atas pencapaiannya menjadi Juara 2 dalam Lomba IT Software Solution For Business di Lomba Kompetensi Siswa tingkat Provinsi Banten</p>
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
                        <img src="/images/kingramdan.jpg" class="w-full h-80 object-cover" alt="Judul Berita 1">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-4">23 July 2025</p>
                            <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                <p>Selamat untuk Ramdani Sunarto atas pencapaiannya menjadi Juara 2 dalam Lomba IT Software Solution For Business di Lomba Kompetensi Siswa tingkat Provinsi Banten</p>
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
                        <img src="/images/beritasnbt.jpg" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">21 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">Selamat untuk siswa SMK LETRIS INDONESIA 2 yang berhasil Lulus UTBK - SNBT 2025</h3>
                        <p class="text-gray-700 text-sm">Selamat untuk 2 Siswa SMK LETRIS INDONESIA 2 "Pajri Aria Dana" yang berhasil lulus ke UIN Jakarta dengan Program Studi Sistem Informasi dan juga "M Ba...</p>
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
                            <h3 class="text-xl font-bold text-gray-800">Selamat untuk siswa SMK LETRIS INDONESIA 2 yang berhasil Lulus UTBK - SNBT 2025</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/beritasnbt.jpg" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">21 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Selamat untuk 2 Siswa SMK LETRIS INDONESIA 2 "Pajri Aria Dana" yang berhasil lulus ke UIN Jakarta dengan Program Studi Sistem Informasi dan juga "M Ba'iathurrahman" yang berhasil lulus ke Universitas Sultan Ageng Tirtayasa dengan Program Studi Ekonomi Syariah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/beritafutsal.jpg" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">18 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">SMK LETRIS INDONESIA 2 Menjadi Juara 2 Futsal</h3>
                        <p class="text-gray-700 text-sm">Ekskul Futsal SMK LETRIS INDONESIA 2 Berhasil menjadi Juara 2 di COFEST KAMPUS UPJ 2025</p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita 3 -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">SMK LETRIS INDONESIA 2 Menjadi Juara 2 Futsal</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/beritafutsal.jpg" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">18 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Ekskul Futsal SMK LETRIS INDONESIA 2 Berhasil menjadi Juara 2 di COFEST KAMPUS UPJ 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Berita 4 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/berita1.jpeg" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">09 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">SPMB Tahap 2 SMA-SMK Swasta</h3>
                        <p class="text-gray-700 text-sm">Jakarta - Ada yang berbeda dengan Masa Pengenalan Lingkungan Satuan Pendidikan (MPLS) 
                            bagi murid baru jenjang SMP dan SMA/SMK. Apa itu?Kepala Pusat Pe...
                        </p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita  -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">SPMB Tahap 2 SMA-SMK Swasta</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/berita1.jpeg" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">09 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>EJakarta - Ada yang berbeda dengan Masa Pengenalan Lingkungan Satuan Pendidikan (MPLS) bagi murid baru 
                                        jenjang SMP dan SMA/SMK. Apa itu?Kepala Pusat Penguatan Karakter Rusprita Putri Utami menyebutkan murid
                                        baru jenjang SMP dan SMA/SMK akan melalui asesmen literasi-numerasi saat MPLS tahun ajaran 2025/2026.
                                        Hasil asesmen nantinya akan menjadi acuan bagi guru untuk merancang pembelajaran."Pada jenjang SMP dan 
                                        juga SMA/SMK, ini terdapat asesmen awal MPLS Ramah terkait literasi membaca dan numerasi," kata 
                                        Rusprita dalam acara Sosialisasi MPLS Ramah 2025 yang disiarkan secara daring di laman YouTube 
                                        Kemendikdasmen, Selasa (8/7/2025).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Berita 5 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/berita2.png" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">06 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">Berapa Besaran Dana PIP untuk SMA/SMK?</h3>
                        <p class="text-gray-700 text-sm">Jakarta - Program Indonesia Pintar (PIP) masih menjadi bantuan yang ditunggu-tunggu 
                            pencairannya oleh banyak siswa. Saking ramainya, beredar informasi...</p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita 5 -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">Berapa Besaran Dana PIP untuk SMA/SMK?</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/berita2.png" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">06 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Jakarta - Program Indonesia Pintar (PIP) masih menjadi bantuan yang ditunggu-tunggu pencairannya oleh 
                                        banyak siswa. Saking ramainya, beredar informasi simpang siur terkait besaran dana PIP, khususnya 
                                        untuk siswa SMA/SMK.Oleh karena itu, Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) 
                                        menegaskan besaran dana PIP untuk jenjang SMA/SMK/Paket C nominalnya sebesar Rp 1,8 juta per siswa 
                                        per tahunnya.Hal itu telah diatur dalam Peraturan Sekretaris Jenderal Kemendikbudristek Nomor 19 Tahun 
                                        2024 Tentang Petunjuk Pelaksanaan Program Indonesia Pintar Pendidikan Dasar dan Menengah.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Berita 6 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/berita3.jpeg" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">08 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">MPLS SMP-SMA Akan Ada Asesmen Literasi-Numerasi</h3>
                        <p class="text-gray-700 text-sm">Jakarta - Ada yang berbeda dengan Masa Pengenalan Lingkungan Satuan Pendidikan 
                            (MPLS) bagi murid baru jenjang SMP dan SMA/SMK. Apa itu?Kepala Pusat Pe...</p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita 6 -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">MPLS SMP-SMA Akan Ada Asesmen Literasi-Numerasi</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/berita3.jpeg" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">08 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Jakarta - Ada yang berbeda dengan Masa Pengenalan Lingkungan Satuan Pendidikan (MPLS) bagi murid baru 
                                        jenjang SMP dan SMA/SMK. Apa itu?Kepala Pusat Penguatan Karakter Rusprita Putri Utami menyebutkan murid
                                        baru jenjang SMP dan SMA/SMK akan melalui asesmen literasi-numerasi saat MPLS tahun ajaran 2025/2026. 
                                        Hasil asesmen nantinya akan menjadi acuan bagi guru untuk merancang pembelajaran."Pada jenjang SMP dan
                                        juga SMA/SMK, ini terdapat asesmen awal MPLS Ramah terkait literasi membaca dan numerasi," kata
                                        Rusprita dalam acara Sosialisasi MPLS Ramah 2025 yang disiarkan secara daring di laman YouTube
                                        Kemendikdasmen, Selasa (8/7/2025).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Berita 7 -->
            <div x-data="{ open: false }" class="bg-[#f6ecd0] rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer">
                <div @click="open = true">
                    <div class="h-48 overflow-hidden">
                        <img src="/images/berita4.png" alt="Judul Berita 2" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-gray-500 mb-2">18 July 2025</p>
                        <h3 class="font-bold text-lg mb-2">SMK LETRIS INDONESIA 2 Menjadi Juara 2 Futsal</h3>
                        <p class="text-gray-700 text-sm">Ekskul Futsal SMK LETRIS INDONESIA 2 Berhasil menjadi Juara 2 di COFEST KAMPUS UPJ 2025</p>
                        <div class="flex items-center mt-3 text-sm text-amber-600 font-medium">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Modal Berita  -->
                <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4 overflow-y-auto" style="display: none;" @click.self="open = false">
                    <div class="bg-white w-full max-w-4xl rounded-lg shadow-2xl relative my-8 flex flex-col">
                        <div class="flex justify-between items-center p-4 border-b bg-white rounded-t-lg">
                            <h3 class="text-xl font-bold text-gray-800">SMK LETRIS INDONESIA 2 Menjadi Juara 2 Futsal</h3>
                            <button @click="open = false" class="text-3xl text-gray-600 hover:text-red-600 absolute top-3 right-4">&times;</button>
                        </div>
                        <div class="overflow-y-auto flex-1">
                            <img src="/images/berita4.png" class="w-full h-80 object-cover" alt="Judul Berita 2">
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-4">18 July 2025</p>
                                <div class="text-gray-700 leading-relaxed text-base space-y-4">
                                    <p>Ekskul Futsal SMK LETRIS INDONESIA 2 Berhasil menjadi Juara 2 di COFEST KAMPUS UPJ 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.reveal').forEach(el => {
            el.classList.remove('opacity-0', 'translate-y-8');
            el.classList.add('opacity-100', 'translate-y-0');
        });
    });
</script>