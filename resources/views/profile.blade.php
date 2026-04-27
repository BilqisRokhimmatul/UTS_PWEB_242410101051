@extends('layouts.app')
@section('title', 'My Profile')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-20">
    <div class="bg-white rounded-[60px] shadow-2xl p-12 text-center border border-pink-50">

        <div class="inline-block relative mb-6">
            <div class="w-32 h-32 rounded-full bg-pink-100 flex items-center justify-center text-5xl border-4 border-white shadow-lg">
                🌸
            </div>
        </div>

        <h2 class="font-serif text-4xl text-pink-900 font-bold mb-2">{{ $username }}</h2>
        <p class="text-pink-400 uppercase tracking-widest text-xs font-bold mb-10">Owner of Bloom & Grace</p>

        <div class="space-y-4 max-w-xs mx-auto">
            <div class="bg-pink-50/50 p-4 rounded-3xl flex justify-between px-8">
                <span class="text-pink-900/50 text-sm">Status</span>
                <span class="text-pink-600 font-bold text-sm">Administrator</span>
            </div>

            <a href="{{ route('login') }}" 
               onclick="return confirm('Apakah kamu yakin ingin keluar dari aplikasi?')"
               class="flex items-center justify-center gap-2 w-full bg-red-50 text-red-500 py-4 rounded-full font-bold shadow-sm hover:bg-red-500 hover:text-white transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Logout Account
            </a>
        </div>
    </div>
</div>
@endsection