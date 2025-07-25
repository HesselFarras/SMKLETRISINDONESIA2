@extends('components.layout')

@section('content')
<!-- Banner Section -->
<section class="w-full">
    <img src="/images/bannerbaru.png" alt="Banner SMK" class="w-full rounded-lg shadow-lg h-auto object-cover">
</section>

<section class="bg-gradient-to-br from-amber-50 to-orange-50 py-12" x-data="{ open: null }">
    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-10 uppercase px-4">Program Studi di SMK LETRIS 2 INDONESIA</h2>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'tjkt'">
                <img src="/images/tkj.jpg" alt="PPLG" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Teknik Jaringan Komputer & Telekomunikasi</h3>
                <p class="text-gray-700 text-sm">Belajar pemrograman, pembuatan aplikasi, dan pengembangan gim.</p>
            </div>
            <!-- PPLG -->
            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'pplg'">
                <img src="/images/rpl.jpg" alt="PPLG" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Pengembangan Perangkan Lunak & Gim</h3>
                <p class="text-gray-700 text-sm">Belajar pemrograman, pembuatan aplikasi, dan pengembangan gim.</p>
            </div>
            
            <!-- AKL -->
            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'akl'">
                <img src="/images/akuntansi.jpg" alt="AKL" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Akuntansi & Keuangan Lembaga</h3>
                <p class="text-gray-700 text-sm">Akuntansi dan keuangan lembaga, pencatatan transaksi, hingga pelaporan.</p>
            </div>
            
            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'mplb'">
                <img src="/images/perkantoran.jpg" alt="PPLG" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Manajemen Perkantoran & Layanan Bisnis</h3>
                <p class="text-gray-700 text-sm">Belajar pemrograman, pembuatan aplikasi, dan pengembangan gim.</p>
            </div>

            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'bdp'">
                <img src="/images/bisnis.jpg" alt="PPLG" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Bisnis Daring Pemasaran</h3>
                <p class="text-gray-700 text-sm">Belajar pemrograman, pembuatan aplikasi, dan pengembangan gim.</p>
            </div>

            <div class="bg-[#f6ecd0] p-4 sm:p-6 rounded-lg shadow-md cursor-pointer hover:shadow-xl transition" @click="open = 'dkv'">
                <img src="/images/multimedia.jpg" alt="PPLG" class="w-full h-40 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Desain Komunikasi Visual</h3>
                <p class="text-gray-700 text-sm">Jurusan ini membekali siswa dengan keterampilan dalam bidang desain grafis, animasi, videografi, 
                    fotografi, dan produksi media digital lainnya. Siswa akan belajar menggunakan software kreatif seperti Adobe Photoshop, Premiere, 
                    After Effects, dan lainnya. Jurusan ini cocok untuk kamu yang kreatif, suka berkreasi visual, dan ingin bekerja di dunia industri 
                    kreatif seperti content creator, editor video, desain grafis, maupun multimedia specialist.</p>
                <p>Biaya SPP per bulan : Rp250.000</p>
            </div>
        </div>
    </div>

    <!-- Popup PPLG -->
    <div x-show="open === 'pplg'" class="fixed inset-0 z-50 bg-black bg-opacity-20 flex items-center justify-center px-4" x-transition>
        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-4 sm:p-6 rounded-lg max-w-xl w-full relative">
            <button class="absolute top-2 right-3 text-gray-700 hover:text-red-600 text-xl" @click="open = null">&times;</button>
            <h3 class="text-xl font-bold text-black mb-4">PPLG</h3>
            <p class="text-gray-700 text-sm leading-relaxed">Program PPLG mempersiapkan siswa menjadi developer aplikasi, web, dan game.</p>
        </div>
    </div>

    <!-- Popup AKL -->
    <div x-show="open === 'akl'" class="fixed inset-0 z-50 bg-black bg-opacity-20 flex items-center justify-center px-4" x-transition>
        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-4 sm:p-6 rounded-lg max-w-xl w-full relative">
            <button class="absolute top-2 right-3 text-gray-700 hover:text-red-600 text-xl" @click="open = null">&times;</button>
            <h3 class="text-xl font-bold text-black mb-4">AKL</h3>
            <p class="text-gray-700 text-sm leading-relaxed">Program Akuntansi & Keuangan Lembaga mengajarkan pencatatan, pelaporan, dan software akuntansi.</p>
        </div>
    </div>
</section>

<!-- Konsultasi Jurusan -->
<section class="bg-amber-50 text-center py-12" x-data="{ showForm: false }">
    <button @click="showForm = true" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition">
        Konsultasi Jurusan
    </button>

    <div x-show="showForm" x-transition class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center px-4">
        <div class="bg-white w-full max-w-lg p-6 rounded-lg shadow-xl relative">
            <button @click="showForm = false" class="absolute top-2 right-3 text-xl text-gray-600 hover:text-red-600">&times;</button>
            <h3 class="text-xl font-bold mb-4 text-gray-800">Konsultasi Jurusan</h3>
            <form>
                <div class="space-y-4 text-left">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Nama Lengkap</label>
                        <input type="text" required class="w-full mt-1 p-2 border rounded focus:ring-pink-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Email / No. WhatsApp</label>
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
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                        Kirim Konsultasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Section Berita -->
<section id="berita" class="py-12 bg-gradient-to-br from-orange-50 to-amber-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-center">News & Updates</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Berita 1 -->
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/kingramdan.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Berita 1">
                <h3 class="font-semibold text-lg">Juara LKS Tingkat Provinsi</h3>
                <p class="text-sm text-gray-600">23 July 2025</p>
                <a href="/berita.html" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <!-- Berita 2 -->
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/beritasnbt.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Berita 2">
                <h3 class="font-semibold text-lg">Lulus UTBK - SNBT 2025</h3>
                <p class="text-sm text-gray-600">21 July 2025</p>
                <a href="/berita.html" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <!-- Berita 3 -->
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/beritafutsal.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Berita 3">
                <h3 class="font-semibold text-lg">Juara 2 Futsal</h3>
                <p class="text-sm text-gray-600">18 July 2025</p>
                <a href="/berita.html" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
// script reveal tetap
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
