@extends('layouts.app')
@section('title', 'Login - Bloom & Grace')

@section('content')
<div class="relative min-h-screen flex items-center justify-center overflow-hidden">
    
    <div class="orb top-0 left-0"></div>
    <div class="orb bottom-0 right-0" style="animation-delay: -5s; background: radial-gradient(circle, rgba(255,192,203,0.2) 0%, rgba(253,242,242,0) 70%);"></div>

    @foreach(range(1, 12) as $i)
        <div class="petal" style="
            left: {{ rand(0, 100) }}%; 
            width: {{ rand(12, 20) }}px; 
            height: {{ rand(12, 20) }}px; 
            animation-delay: {{ rand(0, 10) }}s; 
            animation-duration: {{ rand(8, 15) }}s;
            transform: rotate({{ rand(0, 360) }}deg);
        "></div>
    @endforeach

    <div class="z-20 bg-white/60 backdrop-blur-lg p-10 rounded-[40px] shadow-[0_20px_50px_rgba(255,182,193,0.3)] w-full max-w-md border border-white/80 text-center">
        <div class="mb-8">
            <div class="inline-block p-4 bg-pink-100 rounded-full mb-4">
                <span class="text-3xl">🌸</span>
            </div>
            <h1 class="font-serif text-4xl font-bold text-pink-800 tracking-wide">Bloom & Grace</h1>
            <p class="text-pink-400 text-sm mt-2">Hi pretty! Your flowers are waiting for you</p>
        </div>

        <form action="{{ route('welcome') }}" method="POST" class="space-y-6 text-left">
            @csrf
            <div class="group">
                <label class="block text-xs uppercase tracking-[0.2em] text-pink-900 font-bold mb-2 ml-1">Florist Name</label>
                <input type="text" name="username" placeholder="Type your name here..." required
                    class="w-full px-6 py-4 rounded-2xl bg-white/50 border border-pink-100 focus:ring-2 focus:ring-pink-300 focus:bg-white outline-none transition-all duration-500 placeholder:text-pink-200">
            </div>
            
            <button type="submit" 
                class="w-full bg-gradient-to-r from-pink-400 to-pink-500 hover:from-pink-500 hover:to-pink-600 text-white font-bold py-4 rounded-2xl shadow-lg shadow-pink-200 transition-all duration-300 transform hover:scale-[1.02] active:scale-95 uppercase tracking-widest text-sm">
                login
            </button>
        </form>
    </div>
</div>
@endsection