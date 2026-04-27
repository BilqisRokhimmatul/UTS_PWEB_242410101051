<nav class="sticky top-0 z-50 bg-[#FFF5F5] shadow-sm p-4 md:p-6 transition-all duration-300">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
        {{-- Logo: Tetap di tengah kalau mobile, kiri kalau desktop --}}
        <a href="#" class="font-serif text-xl md:text-2xl font-bold text-pink-600 uppercase">BLOOM & GRACE</a>
        
        {{-- Container Menu: Flex supaya muncul di mobile, ganti space-x jadi gap agar lebih fleksibel --}}
        <div class="flex flex-wrap justify-center items-center gap-4 md:gap-8 text-[10px] md:text-xs font-bold uppercase tracking-widest text-pink-900/60">
            @if(Route::is('login'))
                <a href="{{ route('login') }}" class="hover:text-pink-500">Login</a>
            @endif

            @if(!Route::is('login'))
                <a href="{{ route('welcome', ['username' => $username]) }}" 
                   class="{{ Route::is('welcome') ? 'text-pink-600 border-b-2 border-pink-600' : 'hover:text-pink-500' }} pb-1">Homepage</a>
                
                <a href="{{ route('dashboard', ['username' => $username]) }}" 
                   class="{{ Route::is('dashboard') ? 'text-pink-600 border-b-2 border-pink-600' : 'hover:text-pink-400' }} pb-1">Dashboard</a>
                
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
                   class="{{ Route::is('pengelolaan') ? 'text-pink-600 border-b-2 border-pink-600' : 'hover:text-pink-400' }} pb-1">Pengelolaan</a>

                <a href="{{ route('profile', ['username' => $username]) }}" 
                   class="{{ Route::is('profile') ? 'text-pink-600 border-b-2 border-pink-600' : 'hover:text-pink-400' }} pb-1">Profile</a>
            @endif
        </div>
    </div>
</nav>