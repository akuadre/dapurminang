@extends('layout')

@section('title', 'Home')
@section('header_page', 'Selamat Datang di Dapur Minang')
@section('description_page', 'Nikmati kelezatan makanan khas Minang langsung dari dapur kami.')

@section('content')

<div class="absolute inset-0 -z-10 h-full w-full bg-gray-100 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]">
    <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-black opacity-20 blur-[100px]"></div>
  </div>

<div class="mt-8">
    <div class="relative z-10 w-full h-[440px] container mx-auto px-6 pb-12">
        <img src="{{ asset('images/icon/dapurminang-tsp.png') }}" alt="" class="w-96 h-96 mx-auto mb-4 transition duration-300 hover:scale-110">
        <div class="w-fit mx-auto flex items-center justify-center bg-white gap-3 p-2 rounded-full">
            <a href="" class="bg-gray-200 text-slate-800 font-medium px-6 py-3 rounded-full shadow hover:bg-red-600 hover:text-white hover:scale-105 transition duration-300">Menu</a>
            <a href="" class="bg-gray-200 text-slate-800 font-medium px-6 py-3 rounded-full shadow hover:bg-emerald-600 hover:text-white hover:scale-105 transition duration-300">Box Catering</a>
            <a href="" class="bg-gray-200 text-slate-800 font-medium px-6 py-3 rounded-full shadow hover:bg-indigo-600 hover:text-white hover:scale-105 transition duration-300">Kontak</a>
        </div>
    </div>
</div>

@endsection
