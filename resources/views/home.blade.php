@extends('components.layout')

@section('content')
<!-- Hero Section -->
<section class="relative">
    <img src="/images/hero.png" alt="Gedung SMK" class="w-full h-[500px] object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white text-center reveal opacity-0 translate-y-8 transition-all duration-700">
        <img src="/images/logoletris.png" class="w-32 mb-4" alt="Logo">
        <h1 class="text-4xl font-bold">SMK LETRIS INDONESIA 2</h1>
        <a href="/tentang.html" class="mt-4 px-6 py-2 bg-transparent text-white rounded hover:bg-slate-400">Learn More</a>
    </div>
</section>

<!-- Info Boxes -->
<section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4 reveal opacity-0 translate-y-8 transition-all duration-700">
        <div class="bg-[#f6ecd0] p-6 shadow rounded">
            <h2 class="text-xl font-semibold mb-2">About</h2>
            <p>SMK Letris Indonesia 2 adalah sekolah yang berkomitmen mencetak lulusan kompeten di bidangnya.</p>
            <a href="{{ route('about') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
        </div>
        <div class="bg-[#f6ecd0] p-6 shadow rounded">
            <h2 class="text-xl font-semibold mb-2">Fasilitas</h2>
            <p>Fasilitas lengkap mulai dari ruang kelas modern, laboratorium, perpustakaan dan lainnya.</p>
            <a href="{{ route('about') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
        </div>
        <div class="bg-[#f6ecd0] p-6 shadow rounded">
            <h2 class="text-xl font-semibold mb-2">Informasi & Berita</h2>
            <p>Ikuti berita dan update terbaru mengenai kegiatan SMK Letris Indonesia 2.</p>
            <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
        </div>
    </div>
</section>

<!-- Statistik Sekolah -->
<section class="bg-gradient-to-br from-orange-50 to-amber-50 py-16">
    <div class="container mx-auto px-4 text-center reveal opacity-0 translate-y-8 transition-all duration-700">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-[#f6ecd0] rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="text-5xl font-extrabold text-blue-600 mb-2">2000+</div>
                <p class="text-gray-700 font-semibold">Jumlah Siswa</p>
            </div>
            <div class="bg-[#f6ecd0] rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="text-5xl font-extrabold text-blue-600 mb-2">50+</div>
                <p class="text-gray-700 font-semibold">Jumlah Guru</p>
            </div>
            <div class="bg-[#f6ecd0] rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                <div class="text-5xl font-extrabold text-blue-600 mb-2">6</div>
                <p class="text-gray-700 font-semibold">Jumlah Jurusan</p>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas Carousel -->
<section id="fasilitas" class="py-12 px-6 bg-gradient-to-br from-orange-50 to-amber-50">
    <div id="carousel" class="flex overflow-x-auto gap-4 scroll-smooth reveal opacity-0 translate-y-8 transition-all duration-700">
        <!-- Contoh item fasilitas -->
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/uks.jpg" alt="Unit Kesehatan Sekolah" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Unit Kesehatan Sekolah</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/lapangansekolah.jpg" alt="Lapangan Sekolah" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Lapangan Sekolah</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/ruangkelas.jpg" alt="Ruang Kelas" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Ruang Kelas</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/parkiran.jpg" alt="Tempat Parkir" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Tempat Parkir</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/mushola.jpg" alt="Mushola" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Mushola</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/perpus.jpg" alt="Perpustakaan" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Perpustakaan</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/labkomputerr.jpg" alt="Laboratorium Komputer" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Laboratorium Komputer</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/koperasi.jpg" alt="Koperasi" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Koperasir</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/kantinn.jpg" alt="Kantin" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Kantin</div>
        </div>
        <div class="min-w-[300px] bg-[#f6ecd0] shadow rounded overflow-hidden">
            <img src="/images/aula.jpg" alt="Aula" class="w-full h-48 object-cover">
            <div class="p-4 font-semibold text-center">Aula</div>
        </div>
        
    </div>
</section>

<!-- Video Profil -->
<section class="py-12 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="container mx-auto px-4 reveal opacity-0 translate-y-8 transition-all duration-700">
        <div class="aspect-w-16 aspect-h-9">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/CMchugFHO64?si=IOPlENI5v_0ckIXB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- News & Updates -->
<section id="berita" class="py-12 mx-auto bg-gradient-to-br from-orange-50 to-amber-50">
    <div class="container mx-auto px-4 reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-2xl font-bold mb-6">News & Updates</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Contoh berita -->
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/kingramdan.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Judul Berita 1">
                <h3 class="font-semibold text-lg">Siswa SMK LETRIS INDONESIA 2 Menjadi juara LKS Tingkat Provinsi</h3>
                <p class="text-sm text-gray-600">23 July 2025</p>
                <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/beritasnbt.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Judul Berita 2">
                <h3 class="font-semibold text-lg">Selamat untuk siswa SMK LETRIS INDONESIA 2 yang berhasil Lulus UTBK - SNBT 2025</h3>
                <p class="text-sm text-gray-600">21 July 2025</p>
                <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <img src="/images/beritafutsal.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Judul Berita 3">
                <h3 class="font-semibold text-lg">SMK LETRIS INDONESIA 2 Menjadi Juara 2 Futsal</h3>
                <p class="text-sm text-gray-600">18 July 2025</p>
                <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('#carousel');
        const reveals = document.querySelectorAll('.reveal');

        function revealOnScroll() {
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
        }

        revealOnScroll();
        window.addEventListener('scroll', revealOnScroll);
    });
</script>

</body>
</html>
