@extends('layout')

@section('title', 'Home')
@section('header_page', 'Selamat Datang di Dapur Minang')
@section('description_page', 'Nikmati kelezatan makanan khas Minang langsung dari dapur kami.')

@section('content')

<div class="mt-2">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Rendang</h2>
            <p class="text-gray-600">Rendang asli Minang dengan bumbu kaya rasa.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Sate Padang</h2>
            <p class="text-gray-600">Sate Padang dengan kuah khas yang gurih.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-right" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Dendeng Batokok</h2>
            <p class="text-gray-600">Dendeng yang digoreng kering dengan sambal balado.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Rendang</h2>
            <p class="text-gray-600">Rendang asli Minang dengan bumbu kaya rasa.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Sate Padang</h2>
            <p class="text-gray-600">Sate Padang dengan kuah khas yang gurih.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-left" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Dendeng Batokok</h2>
            <p class="text-gray-600">Dendeng yang digoreng kering dengan sambal balado.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="600">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Rendang</h2>
            <p class="text-gray-600">Rendang asli Minang dengan bumbu kaya rasa.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="800">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Sate Padang</h2>
            <p class="text-gray-600">Sate Padang dengan kuah khas yang gurih.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" data-aos="fade-down" data-aos-duration="500" data-aos-delay="1000">
            <img src="{{ asset('images/icon/dapurminang.png') }}" alt="Gudeg" class="w-full rounded-md">
            <h2 class="text-xl font-semibold mt-2">Dendeng Batokok</h2>
            <p class="text-gray-600">Dendeng yang digoreng kering dengan sambal balado.</p>
        </div>
    </div>
</div>

@endsection
