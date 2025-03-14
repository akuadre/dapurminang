@extends('layout')

@section('title', 'Box Catering')
@section('header_page', 'Box Catering Dapur Minang')
@section('description_page', 'Nasi Kotak praktis dengan rasa autentik Minang, cocok untuk berbagai acara.')

@section('content')

<div class="mt-2">
    <!-- Section Hero / Intro -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center text-white" data-aos="fade-up" data-aos-duration="800">
        <h2 class="text-3xl font-bold">Catering Box</h2>
        <p class="text-gray-300 mt-2 max-w-2xl mx-auto">
            Nasi Kotak dalam kemasan dus kami adalah pilihan praktis dan berkualitas untuk berbagai acara. 
            Dibuat dengan bahan-bahan segar, nasi kotak ini disajikan dengan cita rasa autentik yang lezat. 
            Semua menu telah bersertifikasi halal, sehingga aman untuk dinikmati oleh semua kalangan. 
            Dapatkan promo khusus setiap bulannya!
        </p>
        <button class="mt-6 bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition" onclick="window.location.href='{{ route('kontak') }}'">
            Konsultasi Sesuai Kebutuhan
        </button>
    </div>

    <!-- Feature Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10" data-aos="fade-up" data-aos-duration="800">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-800 mt-4">Halal & Fresh</h3>
            <p class="text-gray-600 mt-2">Bersertifikasi halal dan menggunakan bahan makanan yang segar.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-800 mt-4">Gratis Ongkir</h3>
            <p class="text-gray-600 mt-2">Dapatkan gratis biaya pengiriman untuk wilayah Bandung dan sekitarnya.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-800 mt-4">Pembayaran Mudah</h3>
            <p class="text-gray-600 mt-2">Pembayaran bisa langsung full atau sistem pelunasan ketika produk sampai.</p>
        </div>
    </div>

    <h1 class="text-3xl font-bold text-left text-gray-800 mt-5">Layanan Box Catering</h1>
<p class="text-left text-gray-600 mt-2">Pilih paket makanan sesuai kebutuhan acara Anda dan buat pesanan dengan mudah.</p>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
    
    <!-- Paket Rendang -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
        <h2 class="text-xl font-semibold">Paket Rendang</h2>
        <span class="bg-green-500 text-white text-sm px-2 py-1 rounded-full mt-2">Best Seller</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 30.000</p>
        <p class="text-gray-600 mt-2">Rendang asli Minang dengan bumbu kaya rasa.</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Rendang Sapi</li>
            <li>Sayur Nangka</li>
            <li>Sambal Ijo</li>
            <li>Kerupuk Jangek</li>
        </ul>
        <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 w-full">Pesan Sekarang</button>
    </div>

    <!-- Paket Sate Padang -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
        <h2 class="text-xl font-semibold">Paket Sate Padang</h2>
        <span class="bg-yellow-500 text-white text-sm px-2 py-1 rounded-full mt-2">Favorit</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 28.000</p>
        <p class="text-gray-600 mt-2">Sate Padang dengan kuah khas yang gurih.</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Sate Padang Sapi/Ayam</li>
            <li>Lontong (opsional)</li>
            <li>Sambal Merah</li>
            <li>Kerupuk Kulit</li>
        </ul>
        <button class="mt-4 bg-yellow-600 text-white px-4 py-2 rounded-full hover:bg-yellow-700 w-full">Pesan Sekarang</button>
    </div>

    <!-- Paket Dendeng Batokok -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1000">
        <h2 class="text-xl font-semibold">Paket Dendeng Batokok</h2>
        <span class="bg-red-500 text-white text-sm px-2 py-1 rounded-full mt-2">Pedas</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 32.000</p>
        <p class="text-gray-600 mt-2">Dendeng kering dengan sambal balado pedas mantap.</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Dendeng Batokok</li>
            <li>Sambal Balado</li>
            <li>Sayur Daun Singkong</li>
            <li>Kerupuk Merah</li>
        </ul>
        <button class="mt-4 bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 w-full">Pesan Sekarang</button>
    </div>

    <!-- Paket Ayam Pop -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
        <h2 class="text-xl font-semibold">Paket Ayam Pop</h2>
        <span class="bg-blue-500 text-white text-sm px-2 py-1 rounded-full mt-2">Baru</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 27.000</p>
        <p class="text-gray-600 mt-2">Ayam Pop empuk dengan sambal lado mudo.</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Ayam Pop</li>
            <li>Sambal Lado Mudo</li>
            <li>Sayur Daun Singkong</li>
            <li>Kerupuk Jangek</li>
        </ul>
        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 w-full">Pesan Sekarang</button>
    </div>

    <!-- Paket Ikan Bakar -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
        <h2 class="text-xl font-semibold">Paket Ikan Bakar</h2>
        <span class="bg-indigo-500 text-white text-sm px-2 py-1 rounded-full mt-2">Limited</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 35.000</p>
        <p class="text-gray-600 mt-2">Ikan nila bakar dengan bumbu Minang spesial.</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Ikan Nila Bakar</li>
            <li>Sambal Khas</li>
            <li>Lalapan Segar</li>
            <li>Kerupuk Merah</li>
        </ul>
        <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 w-full">Pesan Sekarang</button>
    </div>

    <!-- Paket Komplit Minang -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1000">
        <h2 class="text-xl font-semibold">Paket Komplit Minang</h2>
        <span class="bg-purple-500 text-white text-sm px-2 py-1 rounded-full mt-2">Paket Hemat</span>
        <p class="text-gray-600 mt-2 font-bold">Rp. 40.000</p>
        <p class="text-gray-600 mt-2">Semua favorit Minang dalam satu kotak!</p>
        <ul class="mt-3 text-gray-600">
            <li>Nasi Putih</li>
            <li>Rendang</li>
            <li>Sate Padang</li>
            <li>Dendeng Balado</li>
            <li>Sayur Nangka + Daun Singkong</li>
            <li>Sambal Ijo & Merah</li>
            <li>Kerupuk Jangek</li>
        </ul>
        <button class="mt-4 bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700 w-full">Pesan Sekarang</button>
    </div>

</div>


@endsection
