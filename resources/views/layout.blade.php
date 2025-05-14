<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | Dapur Minang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="icon" href="{{ asset('images/icon/dapurminang-tsp.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 overflow-x-hidden">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-6 text-white fixed w-full z-[9999]">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Logo" class="h-10 w-10 rounded-full">
                <a href="{{ route('home') }}" class="text-xl font-bold">Dapur Minang</a>
            </div>

            <ul class="flex text-gray-400 space-x-4">
                <li><a href="{{ route('home') }}" class="transition-all duration-200 hover:text-white {{ Route::currentRouteName() == 'home' ? 'text-white' : '' }}">Beranda</a></li>
                <li><a href="{{ route('menu') }}" class="transition-all duration-200 hover:text-white {{ Route::currentRouteName() == 'menu' ? 'text-white' : '' }}">Menu</a></li>
                <li><a href="{{ route('catering') }}" class="transition-all duration-200 hover:text-white {{ Route::currentRouteName() == 'catering' ? 'text-white' : '' }}">Box Catering</a></li>
                <li><a href="{{ route('kontak') }}" class="transition-all duration-200 hover:text-white {{ Route::currentRouteName() == 'kontak' ? 'text-white' : '' }}">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Isi Konten -->
    <main class="container min-h-screen mx-auto pt-28 p-8 relative">
        <div class="" data-aos="fade-down" data-aos-duration="800" data-aos-delay="10">
            <h1 class="text-3xl font-bold text-center text-gray-800">
                @yield('header_page', 'Halaman Dapur Minang')
            </h1>
            <p class="text-center text-gray-600 mt-2">
                @yield('description_page', 'Halaman Dapur Minang')
            </p>
        </div>

        @yield('content')

    </main>

    <!-- Tombol Back to Top -->
    <button id="backToTop"
        class="fixed bottom-5 right-5 bg-black text-white w-12 h-12 rounded-full shadow-lg flex justify-center items-center opacity-0 invisible transition-all duration-300 hover:opacity-80">
        <span class="text-lg font-semibold">↑</span>
    </button>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2025 Dapur Minang. Semua Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ once: false });

        window.onload = function () {
            setTimeout(() => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }, 100);
        };

        // Back to Top Button
        const backToTop = document.getElementById("backToTop");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                backToTop.classList.remove("opacity-0", "invisible");
                backToTop.classList.add("opacity-100", "visible");
            } else {
                backToTop.classList.remove("opacity-100", "visible");
                backToTop.classList.add("opacity-0", "invisible");
            }
        });

        backToTop.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>

</body>
</html>
