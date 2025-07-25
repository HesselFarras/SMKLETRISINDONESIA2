@extends('components.layout')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body class="bg-gradient-to-br from-amber-50 to-orange-50">

<section class="bg-slate-100 py-12">
    <div class="container mx-auto px-4 max-w-3xl reveal opacity-0 translate-y-8 transition-all duration-700">
        <h2 class="text-3xl font-bold text-center mb-8">Formulir Pendaftaran Siswa Baru</h2>

        <!-- Contoh alert berhasil -->
        <!--
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            Pendaftaran berhasil dikirim!
        </div>
        -->

        <!-- Contoh alert error -->
        <!--
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc list-inside">
                <li>Nama wajib diisi.</li>
                <li>Email tidak valid.</li>
            </ul>
        </div>
        -->

        <form onsubmit="handleSubmit(event)" class="bg-white shadow-md rounded-lg p-6 space-y-4 reveal opacity-0 translate-y-8 transition-all duration-700">

            <div>
                <label class="block font-semibold mb-1">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full border rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full border rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">NISN</label>
                <input type="text" name="nisn" class="w-full border rounded px-4 py-2">
            </div>

            <div>
                <label class="block font-semibold mb-1">Tempat & Tanggal Lahir</label>
                <div class="flex gap-2">
                    <input type="text" name="tempat_lahir" class="w-1/2 border rounded px-4 py-2" placeholder="Tempat">
                    <input type="date" name="tanggal_lahir" class="w-1/2 border rounded px-4 py-2">
                </div>
            </div>

            <div>
                <label class="block font-semibold mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full border rounded px-4 py-2" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-1">Alamat</label>
                <textarea name="alamat" class="w-full border rounded px-4 py-2" rows="3" required></textarea>
            </div>

            <div>
                <label class="block font-semibold mb-1">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="w-full border rounded px-4 py-2">
            </div>

            <div>
                <label class="block font-semibold mb-1">Nomor HP / WA</label>
                <input type="text" name="no_hp" class="w-full border rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Pilih Jurusan</label>
                <select name="jurusan" id="jurusan" class="w-full border rounded px-4 py-2" onchange="updateBiaya()" required>
                    <option value="">-- Pilih --</option>
                    <option value="AKL">AKL - Akuntansi & Keuangan Lembaga</option>
                    <option value="TJKT">TJKT - Teknik Jaringan Komputer & Telekomunikasi</option>
                    <option value="PPLG">PPLG - Pengembangan Perangkat Lunak & Gim</option>
                    <option value="MPLB">MPLB - Manajemen Perkantoran & Layanan Bisnis</option>
                    <option value="BDP">BDP - Bisnis Daring & Pemasaran</option>
                    <option value="DKV">DKV - Desain Komunikasi Visual</option>
                </select>
            </div>

            <div id="biayaContainer" class="hidden mt-4 bg-blue-50 p-4 rounded-lg shadow-sm">
                <p class="font-semibold text-blue-700">Biaya Pendaftaran:</p>
                <p id="biayaText" class="text-blue-800 font-bold text-lg sm:text-xl md:text-2xl mt-1"></p>
            </div>

            <input type="hidden" name="biaya" id="biaya">

            <div class="text-center pt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
<script>
    // Fungsi menampilkan biaya berdasarkan jurusan
    function updateBiaya() {
        const jurusan = document.getElementById("jurusan").value;
        const biayaText = document.getElementById("biayaText");
        const biayaInput = document.getElementById("biaya");
        const container = document.getElementById("biayaContainer");

        const biayaMap = {
            AKL: "Rp. 300.000",
            TJKT: "Rp. 350.000",
            PPLG: "Rp. 400.000",
            MPLB: "Rp. 450.000",
            BDP: "Rp. 500.000",
            DKV: "Rp. 600.000"
        };

        if (biayaMap[jurusan]) {
            biayaText.textContent = biayaMap[jurusan];
            biayaInput.value = biayaMap[jurusan];
            container.classList.remove("hidden");
        } else {
            biayaText.textContent = "";
            biayaInput.value = "";
            container.classList.add("hidden");
        }
    }

    // Fungsi efek reveal saat scroll
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
        const windowHeight = window.innerHeight;

        reveals.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            const revealPoint = 100;

            if (elementTop < windowHeight - revealPoint) {
                el.classList.add('opacity-100', 'translate-y-0');
                el.classList.remove('opacity-0', 'translate-y-8');
            } else {
                el.classList.remove('opacity-100', 'translate-y-0');
                el.classList.add('opacity-0', 'translate-y-8');
            }
        });
    }

    // Fungsi submit form (statis, tanpa kirim ke server)
    function handleSubmit(e) {
        e.preventDefault();

        const form = e.target;
        const nama = form.nama.value.trim();
        const email = form.email.value.trim();

        if (!nama || !email) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Nama dan Email wajib diisi!',
                confirmButtonColor: '#d33'
            });
            return;
        }

        Swal.fire({
            icon: 'success',
            title: 'Pendaftaran Berhasil!',
            text: `Terima kasih, ${nama}! Data Anda telah disimpan.`,
            confirmButtonColor: '#3085d6'
        });

        form.reset();
        document.getElementById("biayaContainer").classList.add("hidden");
    }

    // Inisialisasi saat DOM siap
    document.addEventListener("DOMContentLoaded", () => {
        revealOnScroll();
        window.addEventListener("scroll", revealOnScroll);

        // Tambah animasi ke semua <a> dan <button>
        document.querySelectorAll("a, button").forEach(el => {
            el.classList.add("transition", "duration-300", "ease-in-out");
        });
    });
</script>


</body>
</html>
