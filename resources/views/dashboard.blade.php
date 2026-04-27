@extends('layouts.app')
@section('title', 'Business Insights')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10 space-y-10">
    {{-- Header Dashboard --}}
    <div class="flex flex-col md:flex-row justify-between items-end gap-4">
        <div>
            <h2 class="font-serif text-4xl text-pink-900 italic font-bold">Store Performance</h2>
            <p class="text-pink-400 uppercase tracking-widest text-xs font-bold mt-2">Analytical Report for {{ $username }} 🌸</p>
        </div>
        <div class="bg-white px-6 py-3 rounded-2xl shadow-sm border border-pink-50 text-pink-900 font-bold text-xs flex items-center gap-3">
        {{-- Ikon Kalender Minimalis --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg> April 2026
        </div>
    </div>

    {{-- Baris Statistik Utama --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-[40px] shadow-sm border-l-8 border-pink-400">
            <p class="text-xs font-bold text-pink-300 uppercase tracking-widest">Revenue</p>
            <h3 class="text-3xl font-serif text-pink-900 mt-2">Rp 12.5M</h3>
            <p class="text-green-400 text-xs mt-2">↑ 12% dari bulan lalu</p>
        </div>
        <div class="bg-white p-8 rounded-[40px] shadow-sm border-l-8 border-pink-300">
            <p class="text-xs font-bold text-pink-300 uppercase tracking-widest">Orders</p>
            <h3 class="text-3xl font-serif text-pink-900 mt-2">842</h3>
            <p class="text-pink-400 text-xs mt-2">Bouquet Terjual</p>
        </div>
        <div class="bg-white p-8 rounded-[40px] shadow-sm border-l-8 border-pink-200">
            <p class="text-xs font-bold text-pink-300 uppercase tracking-widest">Visitors</p>
            <h3 class="text-3xl font-serif text-pink-900 mt-2">3.1k</h3>
            <p class="text-blue-400 text-xs mt-2">Unique Views</p>
        </div>
        <div class="bg-white p-8 rounded-[40px] shadow-sm border-l-8 border-pink-100">
            <p class="text-xs font-bold text-pink-300 uppercase tracking-widest">Rating</p>
            <h3 class="text-3xl font-serif text-pink-900 mt-2">4.9/5</h3>
            <p class="text-yellow-400 text-xs mt-2">⭐⭐⭐⭐⭐</p>
        </div>
    </div>

    {{-- Grafik Visual (Bohongan pakai CSS biar cepet) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-10 rounded-[50px] shadow-sm border border-pink-50">
            <h4 class="font-bold text-pink-900 mb-8 uppercase tracking-widest text-sm">Weekly Sales Chart</h4>
            <div class="flex items-end justify-between h-48 gap-2">
                <div class="bg-pink-100 w-full rounded-t-xl" style="height: 40%"></div>
                <div class="bg-pink-200 w-full rounded-t-xl" style="height: 65%"></div>
                <div class="bg-pink-300 w-full rounded-t-xl" style="height: 50%"></div>
                <div class="bg-pink-400 w-full rounded-t-xl" style="height: 85%"></div>
                <div class="bg-pink-500 w-full rounded-t-xl" style="height: 100%"></div>
                <div class="bg-pink-300 w-full rounded-t-xl" style="height: 70%"></div>
                <div class="bg-pink-200 w-full rounded-t-xl" style="height: 45%"></div>
            </div>
            <div class="flex justify-between mt-4 text-[10px] font-bold text-pink-300 uppercase">
                <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
            </div>
        </div>

        <div class="bg-pink-500 p-10 rounded-[50px] shadow-xl text-white relative overflow-hidden">
            <div class="relative z-10">
                <h4 class="font-bold mb-4 uppercase tracking-widest text-sm opacity-80">Best Selling Category</h4>
                <h3 class="font-serif text-5xl mb-6 italic">Premium Flower</h3>
                <p class="text-sm opacity-90 leading-relaxed mb-8">
                    Kategori bunga premium menyumbang 65% dari total pendapatan bulan ini. 
                    Pelanggan sangat menyukai kombinasi Rose dan White Lily.
                </p>
                <button class="bg-white text-pink-600 px-8 py-3 rounded-full font-bold text-xs uppercase tracking-widest shadow-lg">Download Report</button>
            </div>
            {{-- Aksen Dekorasi --}}
            <div class="absolute -right-10 -bottom-10 text-[150px] opacity-10 italic">🌸</div>
        </div>
    </div>
</div>
@endsection