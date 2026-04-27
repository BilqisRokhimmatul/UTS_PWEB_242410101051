@extends('layouts.app')
@section('title', 'Welcome to Bloom & Grace')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12 space-y-16">

    {{-- Section 1: Minimalist Welcome Header --}}
    <header class="text-center space-y-4">
        <p class="text-pink-400 font-bold tracking-[0.2em] uppercase text-xs">"Pick your flowers, start your day🌸"</p>
        <h1 class="font-serif text-5xl md:text-6xl text-pink-900 leading-tight">
            Sweet Greetings, <span class="italic text-pink-500">{{ $username }}!</span>
        </h1>
        <p class="text-pink-900/60 leading-relaxed text-md max-w-lg mx-auto">
            Discover our handpicked collection of exquisite blooms, curated to bring beauty and joy to your every moment.
        </p>
        <div class="w-24 h-1 bg-pink-200 mx-auto mt-6"></div>
    </header>

    {{-- Section 2: Floating Product Cards Grid (5 rows x 3 columns) --}}
    <section id="produk" class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach($products as $p)
        {{-- Menggunakan Arbitrary Value Tailwind untuk background-image dinamis --}}
        {{-- Kotak Luar (Card): Kita kecilin paddingnya dari p-6 jadi p-4 --}}
    <div class="group bg-white p-4 rounded-[30px] shadow-[0_10px_30px_rgba(255,182,193,0.15)] transition-all duration-500 hover:shadow-[0_20px_50px_rgba(255,182,193,0.3)] hover:-translate-y-2 flex flex-col items-center border border-pink-50/50">

        {{-- Container Gambar: h-64 kita ganti jadi h-40 atau h-48 biar lebih pendek --}}
        {{-- bg-cover kita ganti jadi bg-contain supaya gambar muncul UTUH (nggak kepotong) --}}
        <div class="w-full h-40 rounded-[20px] overflow-hidden mb-4 bg-contain bg-center bg-no-repeat transition-transform duration-700 group-hover:scale-110" 
            style="background-image: url('{{ asset('images/' . $p['gambar']) }}');">
        </div>

            {{-- Keterangan Produk --}}
            <div class="text-center mt-auto space-y-2 w-full">
                <h3 class="font-serif text-2xl text-pink-950 group-hover:text-pink-700 transition">{{ $p['nama'] }}</h3>
                <p class="text-pink-500 font-bold uppercase tracking-[0.15em] text-sm">IDR {{ $p['harga'] }}</p>

                {{-- Dekorasi Garis Halus --}}
                <div class="w-12 h-0.5 bg-pink-100 mx-auto mt-3 opacity-0 group-hover:opacity-100 transition duration-500"></div>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection