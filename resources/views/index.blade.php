<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website UMKM Minang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-6 text-white fixed w-full">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold">Dapur Minang</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-gray-300 text-slate-400">Beranda</a></li>
                <li><a href="{{ route('menu') }}" class="hover:text-gray-300">Menu</a></li>
                <li><a href="{{ route('catering') }}" class="hover:text-gray-300">Box Catering</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-gray-300">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Isi Konten -->
    <main class="container min-h-screen mx-auto pt-28 p-8">
        <h1 class="text-3xl font-bold text-center text-gray-800">Selamat Datang di Dapur Minang</h1>
        <p class="text-center text-gray-600 mt-2">Nikmati kelezatan makanan khas Minang langsung dari dapur kami.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="{{ asset('images/menu/gudeg-komplit.png') }}" alt="Gudeg" class="w-full rounded-md">
                <h2 class="text-xl font-semibold mt-2">Rendang</h2>
                <p class="text-gray-600">Rendang asli Minang dengan bumbu kaya rasa.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="{{ asset('images/menu/pecelayam-komplit.png') }}" alt="Gudeg" class="w-full rounded-md">
                <h2 class="text-xl font-semibold mt-2">Sate Padang</h2>
                <p class="text-gray-600">Sate Padang dengan kuah khas yang gurih.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="{{ asset('images/menu/nila-goreng.png') }}" alt="Gudeg" class="w-full rounded-md">
                <h2 class="text-xl font-semibold mt-2">Dendeng Batokok</h2>
                <p class="text-gray-600">Dendeng yang digoreng kering dengan sambal balado.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2025 Dapur Minang. Semua Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
