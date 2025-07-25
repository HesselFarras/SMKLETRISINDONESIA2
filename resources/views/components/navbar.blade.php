<header class="bg-slate-900 text-white sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center reveal opacity-0 translate-y-8 transition-all duration-700">
        <!-- Logo -->
        <a href="/index.html" class="flex items-center space-x-2">
            <img src="/images/logoletris.png" alt="Logo" class="w-10 h-10">
            <span class="font-bold text-lg">SMK Letris Indonesia 2</span>
        </a>

        <!-- Hamburger Button (mobile only) -->
        <button id="nav-toggle" class="md:hidden text-white text-2xl focus:outline-none">
            <i id="burger-icon" class="fas fa-bars"></i>
        </button>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-6 font-bold">
            <a href  ="{{ route('home') }}" class="hover:underline">Home</a>
            <a href  ="{{ route('about') }}" class="hover:underline">Profile</a>
            <a href  ="{{ route('berita') }}" class="hover:underline">Berita</a>
            <a href  ="{{ route('department') }}" class="hover:underline">Jurusan</a>
            <a href  ="{{ route('ppdb') }}" class="hover:underline">Pendaftaran</a>
        </nav>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="overflow-hidden max-h-0 md:hidden bg-slate-800 transition-all duration-300">
        <div class="px-4 pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block py-2 border-b border-slate-700">Home</a>
            <a href="{{ route('about') }}" class="block py-2 border-b border-slate-700">Profile</a>
            <a href="{{ route('berita') }}" class="block py-2 border-b border-slate-700">Berita</a>
            <a href="{{ route('department') }}" class="block py-2 border-b border-slate-700">Jurusan</a>
            <a href="{{ route('ppdb') }}"class="block py-2">Pendaftaran</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navToggle = document.getElementById('nav-toggle');
        const burgerIcon = document.getElementById('burger-icon');
        const mobileMenu = document.getElementById('mobile-menu');

        let isOpen = false;

        const toggleMenu = () => {
            isOpen = !isOpen;

            if (isOpen) {
                mobileMenu.classList.remove('max-h-0');
                mobileMenu.classList.add('max-h-[500px]');
                burgerIcon.classList.remove('fa-bars');
                burgerIcon.classList.add('fa-xmark');
            } else {
                mobileMenu.classList.remove('max-h-[500px]');
                mobileMenu.classList.add('max-h-0');
                burgerIcon.classList.remove('fa-xmark');
                burgerIcon.classList.add('fa-bars');
            }
        };

        navToggle.addEventListener('click', toggleMenu);

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                if (isOpen) toggleMenu();
            });
        });
    });
</script>
