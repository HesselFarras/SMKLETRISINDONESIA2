@extends('components.layout')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[450px] bg-cover bg-center" style="background-image: url('/images/hero.png');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center flex-col reveal opacity-0 translate-y-8 transition-all duration-700">
        <img src="/images/logoletris.png" alt="Logo" class="w-32 h-32 mb-4">
        <h1 class="text-white text-4xl font-bold text-center">Tentang</h1>
        <h2 class="text-white text-3xl font-bold text-center">SMK LETRIS INDONESIA 2</h2>
    </div>
    </section>

    <!-- Tentang Sekolah -->
    <section class="py-16 bg-gradient-to-br from-amber-50 to-orange-50 reveal opacity-0 translate-y-8 transition-all duration-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
        <p class="mt-2 text-lg text-gray-700 max-w-3xl mx-auto">
            SMK Letris 2 adalah pilihan cerdas untuk masa depan gemilang. Kami hadir dengan 7 jurusan unggulan dan segudang prestasi.
        </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center">
        <div class="space-y-5 text-gray-800 text-lg leading-relaxed">
            <p>Sejak berdiri pada tahun <strong>2013</strong>, SMK Letris Indonesia 2 telah menjadi rumah bagi ribuan siswa untuk belajar di bidang
            <strong>Multimedia, Teknik Komputer Jaringan, Rekayasa Perangkat Lunak, Akuntansi, Otomatisasi Tata Kelola Perkantoran, Bisnis Daring Pemasaran</strong>, dan <strong>Perbankan Syariah</strong>.
            </p>
            <p>Dengan <span class="text-green-600 font-semibold">Akreditasi A</span> dan naungan <strong>Yayasan Leo Sutrisno</strong>, kami terus berkembang mengikuti <strong>Revolusi Industri 5.0</strong>.</p>
            <p class="italic text-blue-700 font-medium">"Letris bukan hanya sekolah — tapi tempat membangun karakter, kreativitas, dan masa depan."</p>
        </div>

        <div class="relative">
            <img src="/images/fotoletris.jpg" alt="Gedung SMK Letris" class="rounded-xl shadow-lg w-full object-cover h-80">
            <span class="absolute top-2 left-2 bg-yellow-400 text-white text-sm px-3 py-1 rounded-full shadow">Akreditasi A</span>
        </div>
        </div>
    </div>
    </section>

    <!-- Fasilitas -->
    <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8 text-center">Fasilitas</h2>
        <div class="grid md:grid-cols-3 gap-6">
        <!-- Contoh statis -->
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/lapangansekolah.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Lapangan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/ruangkelas.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Ruang Kelas</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>
        <div class="bg-[#f6ecd0] rounded shadow p-4 fasilitas-item flex flex-col items-center">
            <img src="/images/uks.jpg" alt="Lab Komputer" class="w-full h-40 object-cover rounded mb-3">
            <h3 class="font-bold text-lg mb-2">Unit Kesehatan Sekolah</h3>
        </div>

        <div class="text-center mt-6">
        <button id="toggleFasilitasBtn" onclick="toggleFasilitas()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
            Lihat Semua Fasilitas
        </button>
        </div>
    </div>
    </section>

    <!-- Guru & Staff -->
    <section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Guru & Staff Sekolah</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="guruGrid">
        <!-- Contoh guru -->
        <div class="bg-[#f6ecd0] rounded p-4 text-center guru-item">
            <div class="w-full relative pb-[75%] bg-gray-200 mb-3 overflow-hidden rounded">
            <img src="/images/guru1.jpg" alt="Bapak Agus" class="absolute top-0 left-0 w-full h-full object-cover">
            </div>
            <h4 class="font-semibold">Bapak Agus</h4>
            <p class="text-sm text-gray-600">Guru TKJ</p>
        </div>
        <div class="bg-[#f6ecd0] rounded p-4 text-center guru-item">
            <div class="w-full relative pb-[75%] bg-gray-200 mb-3 overflow-hidden rounded">
            <img src="/images/guru2.jpg" alt="Ibu Sari" class="absolute top-0 left-0 w-full h-full object-cover">
            </div>
            <h4 class="font-semibold">Ibu Sari</h4>
            <p class="text-sm text-gray-600">Guru RPL</p>
        </div>
        <!-- Tambah sesuai kebutuhan -->
        </div>

        <div class="text-center mt-6">
        <button id="toggleGuruBtn" onclick="toggleGuru()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
            Lihat Semua Guru
        </button>
        </div>
    </div>
    </section>

    <!-- Lokasi -->
    <section class="bg-gradient-to-br from-orange-50 to-amber-50 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-10 uppercase text-center">Lokasi SMK LETRIS 2 INDONESIA</h2>
        <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-orange-50 p-6 text-lg">
            <p><strong>Alamat:</strong><br>Jl. Siliwangi No.55, Pd. Benda, Pamulang, Tangerang Selatan</p>
            <p class="mt-4"><strong>Email:</strong><br><a href="mailto:smkletris2020@gmail.com" class="text-blue-600 hover:underline">smkletris2020@gmail.com</a></p>
            <p class="mt-4"><strong>Telepon:</strong><br>0851-6186-7926</p>
            <p class="mt-4"><strong>Jam Operasional:</strong><br>Senin - Jumat, 08.00 - 16.00</p>
        </div>
        <div class="relative w-full h-0 pb-[56.25%] overflow-hidden rounded-lg shadow">
            <iframe src="https://www.google.com/maps/embed?pb=..." class="absolute top-0 left-0 w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </div>
    </div>
    </section>

    <!-- News & Updates -->
    <section class="py-12 mx-auto bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6">News & Updates</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-[#f6ecd0] shadow rounded p-4">
            <img src="/images/berita1.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Judul Berita 1">
            <h3 class="font-semibold text-lg">Judul Berita 1</h3>
            <p class="text-sm text-gray-600">25 Juli 2025</p>
            <a href="/berita.html" class="text-blue-500 mt-2 inline-block">Learn More</a>
        </div>
        <!-- Tambah berita lainnya -->
        </div>
    </div>
    </section>
@endsection
    <!-- Script -->
    <script>
    let fasilitasShown = false;
    let guruShown = false;

    function toggleFasilitas() {
        fasilitasShown = !fasilitasShown;
        document.querySelectorAll('.fasilitas-item').forEach((el, index) => {
        if (index > 2) {
            el.classList.toggle('hidden', !fasilitasShown);
        }
        });
        document.getElementById('toggleFasilitasBtn').innerText = fasilitasShown ? 'Tutup' : 'Lihat Semua Fasilitas';
    }

    function toggleGuru() {
        guruShown = !guruShown;
        document.querySelectorAll('.guru-item').forEach((el, index) => {
        if (index > 3) {
            el.classList.toggle('hidden', !guruShown);
        }
        });
        document.getElementById('toggleGuruBtn').innerText = guruShown ? 'Tutup' : 'Lihat Semua Guru';
    }

    // Scroll animation
    function revealOnScroll() {
        document.querySelectorAll('.reveal').forEach(el => {
        const elementTop = el.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        const revealPoint = 100;
        if (elementTop < windowHeight - revealPoint) {
            el.classList.add('opacity-100', 'translate-y-0');
            el.classList.remove('opacity-0', 'translate-y-8');
        }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        revealOnScroll();
        window.addEventListener('scroll', revealOnScroll);
    });
    </script>

    </body>
    </html>
