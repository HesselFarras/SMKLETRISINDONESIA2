@extends('components.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gradient-to-br from-amber-50 to-orange-50">

    <!-- Banner -->
    <section class="relative reveal opacity-0 translate-y-8 transition-all duration-700">
        <img src="/images/ppdb.png" alt="Gedung SMK" class="w-full h-[500px] object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-4xl font-bold">PPDB GELOMBANG 2</h1>
            <div class="text-center my-8">
                <a href="{{ route('registration') }}" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-gray-700">Pendaftaran</a>
            </div>
        </div>
    </section>

    <!-- Rincian Biaya -->
    <section class="my-12 bg-[#f6ecd0] py-10 px-4 rounded shadow container mx-auto reveal opacity-0 translate-y-8 transition-all duration-700">
        <header class="mb-6 text-center">
            <h2 class="text-2xl font-bold">Rincian Biaya Masuk SMK Letris Indonesia TA 2025/2026</h2>
        </header>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-black text-sm">
                <thead class="bg-orange-50">
                    <tr>
                        <th class="border px-2 py-1">No</th>
                        <th class="border px-2 py-1">Komponen</th>
                        <th class="border px-2 py-1">DKV</th>
                        <th class="border px-2 py-1">DKV Bilingual</th>
                        <th class="border px-2 py-1">AKL</th>
                        <th class="border px-2 py-1">MPLB</th>
                        <th class="border px-2 py-1">BDP</th>
                        <th class="border px-2 py-1">PPLG</th>
                        <th class="border px-2 py-1">TJKT</th>
                    </tr>
                </thead>
                <tbody class="bg-orange-50">
                    <tr>
                        <td class="border px-2 py-1">1</td>
                        <td class="border px-2 py-1">SPP Juli 2025</td>
                        <td class="border px-2 py-1">Rp 400.000</td>
                        <td class="border px-2 py-1">Rp 450.000</td>
                        <td class="border px-2 py-1">Rp 400.000</td>
                        <td class="border px-2 py-1">Rp 450.000</td>
                        <td class="border px-2 py-1">Rp 400.000</td>
                        <td class="border px-2 py-1">Rp 400.000</td>
                        <td class="border px-2 py-1">Rp 400.000</td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">2</td>
                        <td class="border px-2 py-1">Dana Sumbangan Pendidikan</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                        <td class="border px-2 py-1">Rp 2.150.000</td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">3</td>
                        <td class="border px-2 py-1">OSIS + TTEK</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                        <td class="border px-2 py-1">Rp 100.000</td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">4</td>
                        <td class="border px-2 py-1">Ekskul Penunjang</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                        <td class="border px-2 py-1">Rp 250.000</td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">5</td>
                        <td class="border px-2 py-1">MPLS + LKS</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                        <td class="border px-2 py-1">Rp 200.000</td>
                    </tr>
                    <tr>
                        <td class="border px-2 py-1">6</td>
                        <td class="border px-2 py-1">PAS (Penilaian Akhir Semester)</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                        <td class="border px-2 py-1">Rp 150.000</td>
                    </tr>
                    <tr class="bg-orange-50 font-semibold">
                        <td class="border px-2 py-1" colspan="2">Total Biaya</td>
                        <td class="border px-2 py-1">Rp 3.250.000</td>
                        <td class="border px-2 py-1">Rp 3.300.000</td>
                        <td class="border px-2 py-1">Rp 3.250.000</td>
                        <td class="border px-2 py-1">Rp 3.300.000</td>
                        <td class="border px-2 py-1">Rp 3.250.000</td>
                        <td class="border px-2 py-1">Rp 3.250.000</td>
                        <td class="border px-2 py-1">Rp 3.250.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Dokumentasi -->
    <section class="container mx-auto px-4 my-10 reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-2xl font-bold mb-4">Dokumentasi</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen1.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen2.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen3.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen4.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen5.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen6.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen7.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
            </div>

            <div class="bg-[#f6ecd0] shadow rounded p-4">
                <div>
                    <img src="/images/dokumen8.JPG" alt="" class="w-full h-full object-cover rounded">
                </div>
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
</body>
@endsection

<script>
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
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

    document.addEventListener('DOMContentLoaded', () => {
        revealOnScroll();
        window.addEventListener('scroll', revealOnScroll);
    });

    document.querySelectorAll('a, button').forEach(el => {
        el.classList.add('transition', 'duration-300', 'ease-in-out');
    });
</script>
