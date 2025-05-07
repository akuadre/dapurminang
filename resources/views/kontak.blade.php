@extends('layout')

@section('title', 'Kontak')
@section('header_page', 'Kontak Dapur Minang')
@section('description_page', 'Nikmati kelezatan makanan khas Minang langsung dari dapur kami.')

@section('content')

<div class="mt-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
        <!-- CARD TEMPLATE -->
        @php
            $cards = [
                [
                    'color' => 'yellow',
                    'bgHover' => 'hover:bg-yellow-900',
                    'borderColor' => 'border-yellow-800',
                    'gradientFrom' => 'from-yellow-300',
                    'name' => 'Adrenalin Muhammad Dewangga',
                    'image' => 'adre.jpg',
                    'quote' => '"Keep pushing, even when it’s hard."',
                    'number' => '6288222134661',
                ],
                [
                    'color' => 'red',
                    'bgHover' => 'hover:bg-red-900',
                    'borderColor' => 'border-red-800',
                    'gradientFrom' => 'from-red-300',
                    'name' => 'Daiva Afdal Rizki Febrian',
                    'image' => 'daiva.jpg',
                    'quote' => '"Creativity is intelligence having fun."',
                    'number' => '62881023689308',
                ],
                [
                    'color' => 'slate',
                    'bgHover' => 'hover:bg-slate-800',
                    'borderColor' => 'border-slate-800',
                    'gradientFrom' => 'from-slate-300',
                    'name' => 'Muhammad Salman Hanan Hakim',
                    'image' => 'salman.jpg',
                    'quote' => '"Perseverance leads to perfection."',
                    'number' => '6282319131340',
                ],
                [
                    'color' => 'green',
                    'bgHover' => 'hover:bg-green-900',
                    'borderColor' => 'border-green-800',
                    'gradientFrom' => 'from-green-300',
                    'name' => 'Yahya Abdul Aziz Asy Syuhada',
                    'image' => 'yahya.jpg',
                    'quote' => '"Simplicity is the ultimate sophistication."',
                    'number' => '6285659869464',
                ],
            ];
        @endphp

        @foreach($cards as $card)
        <div class="group bg-white {{ $card['bgHover'] }} rounded-2xl shadow-xl p-6 border-4 {{ $card['borderColor'] }} relative overflow-hidden transform hover:scale-105 hover:-translate-y-2 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-br {{ $card['gradientFrom'] }} via-white to-gray-100 opacity-40 z-0 transition duration-300 group-hover:opacity-10"></div>
            <div class="relative z-10 text-center">
                <img src="{{ asset('images/people/'.$card['image']) }}" alt="{{ $card['name'] }}" class="w-28 h-28 mx-auto rounded-full object-cover mb-4 shadow-2xl border-4 border-transparent transform hover:scale-110 hover:border-white transition duration-300">
                <h3 class="text-lg font-bold text-gray-800 group-hover:text-white transition duration-300">{{ $card['name'] }}</h3>
                <p class="text-gray-600 group-hover:text-gray-200 mt-2 transition duration-300 italic">{{ $card['quote'] }}</p>
                <a href="https://wa.me/{{ $card['number'] }}" class="inline-flex items-center justify-center mt-4 text-white bg-green-500 hover:bg-green-600 rounded-full px-4 py-2 transition duration-300">
                    <svg class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
                        <path d="M20.52 3.48a12.25 12.25 0 0 0-17.3 0 12.18 12.18 0 0 0-2.77 13.2L.5 23.5l6.94-1.9a12.26 12.26 0 0 0 13.08-2.77 12.25 12.25 0 0 0 0-17.3zM12 20.3c-1.7 0-3.36-.44-4.83-1.27l-.34-.2-4.12 1.13 1.1-4.02-.21-.35A8.75 8.75 0 1 1 12 20.3zm4.87-6.58c-.27-.14-1.63-.8-1.88-.89-.25-.1-.44-.14-.62.14-.18.27-.71.89-.87 1.07-.16.18-.32.2-.6.07a7.14 7.14 0 0 1-3.27-2.88c-.24-.41.24-.38.69-1.27.08-.17.04-.31-.02-.44-.06-.12-.62-1.49-.85-2.05-.22-.53-.44-.46-.6-.47l-.52-.01c-.18 0-.46.06-.7.31s-.92.9-.92 2.2.94 2.56 1.07 2.73c.13.17 1.84 2.83 4.47 3.96.63.27 1.12.43 1.5.55.63.2 1.2.17 1.65.1.5-.07 1.63-.67 1.86-1.31.23-.64.23-1.18.16-1.31-.06-.13-.25-.2-.52-.34z"/>
                    </svg>
                    Chat Me
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
