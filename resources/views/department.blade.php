@extends('components.layout')

@section('content')
<!-- Banner Section -->
<section class="w-full h-1/2">
    <img src="/images/bannerbaru.png" alt="Banner SMK" class="w-full rounded-lg shadow-lg h-auto">
</section>

<section class="bg-gradient-to-br from-amber-50 to-orange-50 py-12" x-data="{ open: null }">
    <h2 class="text-2xl md:text-3xl font-bold text-center py-12 mb-10 uppercase">Program Studi yang ada di SMK LETRIS 2 INDONESIA</h2>
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Contoh Statis 1 -->
            <div class="bg-[#f6ecd0] p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl" @click="open = 'pplg'">
                <img src="/images/jurusan/pplg.jpg" alt="PPLG" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-xl font-semibold mb-2">PPLG</h3>
                <p class="text-gray-700 text-sm">Belajar pemrograman, pembuatan aplikasi, dan pengembangan gim.</p>
            </div>
            <!-- Contoh Statis 2 -->
            <div class="bg-[#f6ecd0] p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl" @click="open = 'akl'">
                <img src="/images/jurusan/akl.jpg" alt="AKL" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-xl font-semibold mb-2">AKL</h3>
                <p class="text-gray-700 text-sm">Akuntansi dan keuangan lembaga, pencatatan transaksi, hingga pelaporan.</p>
            </div>
            <!-- Tambahkan jurusan lainnya di sini -->
        </div>
    </div>

    <!-- Popup Deskripsi Jurusan Statis -->
    <div x-show="open === 'pplg'" class="fixed inset-0 z-50 bg-black bg-opacity-20 flex items-center justify-center px-4" x-transition>
        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-6 rounded-lg max-w-xl w-full relative">
            <button class="absolute top-2 right-3 text-gray-700 hover:text-red-600 text-xl" @click="open = null">&times;</button>
            <h3 class="text-2xl font-bold text-black mb-4">PPLG</h3>
            <div class="text-gray-700 leading-relaxed text-sm">
                Program Pengembangan Perangkat Lunak dan Gim (PPLG) mempersiapkan siswa untuk menjadi developer aplikasi, web, dan game.
            </div>
        </div>
    </div>

    <div x-show="open === 'akl'" class="fixed inset-0 z-50 bg-black bg-opacity-20 flex items-center justify-center px-4" x-transition>
        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-6 rounded-lg max-w-xl w-full relative">
            <button class="absolute top-2 right-3 text-gray-700 hover:text-red-600 text-xl" @click="open = null">&times;</button>
            <h3 class="text-2xl font-bold text-black mb-4">AKL</h3>
            <div class="text-gray-700 leading-relaxed text-sm">
                Program Akuntansi dan Keuangan Lembaga mengajarkan pencatatan, laporan keuangan, dan software akuntansi.
            </div>
        </div>
    </div>
</section>

<!-- Konsultasi Jurusan -->
<section class="bg-amber-50 text-center py-12" x-data="{ showForm: false }">
    <button @click="showForm = true"
        class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition">
        Konsultasi Jurusan
    </button>

    <div x-show="showForm" x-transition class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center px-4">
        <div class="bg-white w-full max-w-lg p-6 rounded-lg shadow-xl relative">
            <button @click="showForm = false" class="absolute top-2 right-3 text-xl text-gray-600 hover:text-red-600">&times;</button>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">Konsultasi Jurusan</h3>
            <form>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Nama Lengkap</label>
                        <input type="text" required class="w-full mt-1 p-2 border rounded focus:ring-pink-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Email atau No. WhatsApp</label>
                        <input type="text" required class="w-full mt-1 p-2 border rounded focus:ring-pink-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Jurusan yang Diminati</label>
                        <select required class="w-full mt-1 p-2 border rounded focus:ring-pink-500">
                            <option>-- Pilih Jurusan --</option>
                            <option>AKL - Akuntansi & Keuangan Lembaga</option>
                            <option>TJKT - Teknik Jaringan Komputer & Telekomunikasi</option>
                            <option>PPLG - Pengembangan Perangkat Lunak & Gim</option>
                            <option>MPLB - Manajemen Perkantoran & Layanan Bisnis</option>
                            <option>BDP - Bisnis Daring Pemasaran</option>
                            <option>DKV - Desain Komunikasi Visual</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Pertanyaan</label>
                        <textarea rows="3" class="w-full mt-1 p-2 border rounded focus:ring-pink-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                        Kirim Konsultasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');
        const scrollHandler = () => {
            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = reveals[i].getBoundingClientRect().top;
                const revealPoint = 100;
                if (elementTop < windowHeight - revealPoint) {
                    reveals[i].classList.add('opacity-100', 'translate-y-0');
                    reveals[i].classList.remove('opacity-0', 'translate-y-8');
                } else {
                    reveals[i].classList.remove('opacity-100', 'translate-y-0');
                    reveals[i].classList.add('opacity-0', 'translate-y-8');
                }
            }
        };
        scrollHandler();
        window.addEventListener('scroll', scrollHandler);
    });
</script>