@extends('layout')

@section('title', 'Menu')
@section('header_page', 'Menu Dapur Minang')
@section('description_page', 'Nikmati kelezatan makanan khas Minang langsung dari dapur kami.')

@section('content')

<div class="mt-2">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/menu/gudeg-komplit.png') }}" alt="Gudeg Komplit" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Gudeg Komplit</h2>
            <p class="text-gray-600">Gudeg khas Yogyakarta lengkap dengan krecek pedas, telur, dan ayam yang dimasak dengan santan dan bumbu khas.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/menu/pecelayam-komplit.png') }}" alt="Pecel Ayam Komplit" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Pecel Ayam Komplit</h2>
            <p class="text-gray-600">Ayam goreng renyah disajikan dengan sambal pedas, lalapan segar, dan nasi hangat, siap menggugah selera.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/menu/nila-goreng.png') }}" alt="Nila Goreng" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Nila Goreng</h2>
            <p class="text-gray-600">Ikan nila digoreng kering hingga garing di luar, lembut di dalam, disajikan dengan sambal dan lalapan.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/menu/ngariung-gurame.png') }}" alt="Ngariung Gurame" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Ngariung Gurame</h2>
            <p class="text-gray-600">Gurame goreng utuh dengan tekstur renyah, pas untuk dinikmati bersama keluarga dalam satu meja.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/menu/ngariung-koneng.png') }}" alt="Ngariung Koneng" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Ngariung Koneng</h2>
            <p class="text-gray-600">Paket spesial nasi kuning lengkap dengan ayam goreng, sambal, telur balado, dan pelengkap lainnya yang menggoda.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/menu/ngariung-kremes.png') }}" alt="Ngariung Kremes" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Ngariung Kremes</h2>
            <p class="text-gray-600">Paket ayam goreng kremes dengan nasi putih, sambal, dan sayur pendamping yang cocok disantap ramai-ramai.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/menu/ayam-cemang.png') }}" alt="Ayam Cemang" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Ayam Cemang</h2>
            <p class="text-gray-600">Ayam hitam khas Nusantara yang kaya manfaat dan dimasak dengan bumbu tradisional yang meresap.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/menu/cumi-goreng.png') }}" alt="Cumi Goreng" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Cumi Goreng</h2>
            <p class="text-gray-600">Cumi segar digoreng renyah, cocok dijadikan lauk utama ataupun pendamping nasi hangat dan sambal.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/menu/udang-goreng.png') }}" alt="Udang Goreng" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Udang Goreng</h2>
            <p class="text-gray-600">Udang pilihan digoreng hingga renyah, disajikan dengan sambal dan nasi, menciptakan rasa gurih yang nikmat.</p>
        </div>
    </div>
</div>

@endsection
