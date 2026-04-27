@extends('layouts.app')
@section('title', 'Inventory Management')

@section('content')
{{-- Tambahkan 'filterKategori' di x-data --}}
<div class="p-4 md:p-8">
<div class="max-w-7xl mx-auto px-4 md:px-6 py-6 md:py-10 space-y-8"
     x-data="{ 
        openAdd: false, 
        openEdit: false, 
        filterKategori: 'Semua',
        editItem: {nama: '', kategori: '', stok: '', harga: ''} 
     }">
    
    {{-- Header --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
        <div>
            <h2 class="font-serif text-3xl text-pink-900 font-bold italic">Flower Inventory</h2>
            <p class="text-pink-400 text-sm">Hello {{ $username }}, manage your beautiful collections here.</p>
        </div>
        
        <div class="flex flex-col md:flex-row items-stretch md:items-center gap-4 w-full md:w-auto">
            {{-- Dropdown Filter --}}
            <div class="flex flex-col space-y-1">
                <label class="text-[10px] uppercase font-bold text-pink-300 ml-4 italic">Filter Category</label>
                <select x-model="filterKategori" 
                        class="bg-white border border-pink-100 text-pink-900 text-xs font-bold py-3 px-6 rounded-full shadow-sm focus:ring-2 focus:ring-pink-200 outline-none cursor-pointer">
                    <option value="Semua">All Categories</option>
                    <option value="Premium Bouquet">Premium Bouquet</option>
                    <option value="Single Flower">Single Flower</option>
                    <option value="Vintage Dried">Vintage Dried</option>
                </select>
            </div>

            <button @click="openAdd = true" 
                    class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3.5 rounded-full font-bold shadow-lg transition transform hover:scale-105 mt-5">
                + Add New Product
            </button>
        </div>
    </div>

    {{-- Tabel Produk --}}
    <div class="bg-white rounded-[30px] md:rounded-[40px] shadow-xl border border-pink-50 overflow-hidden">
    <div class="overflow-x-auto min-w-full">
        <table class="w-full text-left">
            <thead class="bg-pink-50/50 text-pink-900 uppercase text-xs tracking-[0.2em]">
                <tr>
                    <th class="px-8 py-6">Flower Name</th>
                    <th class="px-8 py-6">Category</th>
                    <th class="px-8 py-6">Stock</th>
                    <th class="px-8 py-6 text-center">Price</th>
                    <th class="px-8 py-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-pink-50">
                @foreach($items as $item)
                {{-- Logika Filter: x-show akan menyembunyikan baris jika kategori tidak cocok --}}
                {{-- Logika Zebra: even:bg-pink-50/20 membuat baris genap berwarna pink muda --}}
                <tr x-show="filterKategori === 'Semua' || filterKategori === '{{ $item['kategori'] }}'" 
                    class="hover:bg-pink-100/30 transition even:bg-pink-50/30 group">
                    
                    <td class="px-8 py-5 font-bold text-pink-950 group-hover:text-pink-600 transition">{{ $item['nama'] }}</td>
                    <td class="px-8 py-5">
                        <span class="bg-white border border-pink-100 text-pink-400 text-[10px] px-3 py-1 rounded-full italic font-bold">
                            {{ $item['kategori'] }}
                        </span>
                    </td>
                    <td class="px-8 py-5 text-pink-900 font-mono">{{ $item['stok'] }} pcs</td>
                    <td class="px-8 py-5 font-bold text-pink-500 text-center">IDR {{ $item['harga'] }}</td>
                    <td class="px-8 py-5 text-center">
                        <div class="flex justify-center space-x-4">
                            <button @click="
                                editItem = { 
                                    nama: '{{ $item['nama'] }}', 
                                    kategori: '{{ $item['kategori'] }}', 
                                    stok: '{{ $item['stok'] }}', 
                                    harga: '{{ $item['harga'] }}' 
                                }; 
                                openEdit = true" 
                                class="text-blue-400 hover:text-blue-600 font-bold text-[10px] uppercase tracking-widest">
                                Edit
                            </button>
                            <button onclick="confirm('Are you sure you want to delete {{ $item['nama'] }}?')" 
                                    class="text-red-400 hover:text-red-600 font-bold text-[10px] uppercase tracking-widest">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MODAL FORM TAMBAH (Tetap Sama) --}}
    <div x-show="openAdd" class="fixed inset-0 z-[60] flex items-center justify-center bg-pink-900/20 backdrop-blur-sm p-4" style="display: none;" x-transition>
        <div class="bg-white w-full max-w-md p-6 md:p-10 rounded-[30px] md:rounded-[50px] shadow-2xl border border-pink-50 max-h-[90vh] overflow-y-auto">
            <h3 class="font-serif text-2xl text-pink-900 mb-6 font-bold italic text-center underline decoration-pink-200">Add New Flower</h3>
            <form action="{{ route('pengelolaan') }}" method="GET" class="space-y-4"> {{-- Arahkan ke route yang sama --}}
            <input type="hidden" name="username" value="{{ $username }}"> {{-- Nama kamu dititipkan di sini --}}
                <input type="text" placeholder="Flower Name" class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none">
                <select class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none">
                    <option disabled selected>Select Category</option>
                    <option>Premium Bouquet</option>
                    <option>Single Flower</option>
                    <option>Vintage Dried</option>
                </select>
                <div class="flex gap-4">
                    <input type="number" placeholder="Stock" class="w-1/2 px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300">
                    <input type="text" placeholder="Price (ex: 250k)" class="w-1/2 px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300">
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" @click="openAdd = false" class="w-1/2 py-3 text-pink-400 font-bold">Cancel</button>
                    <button type="submit" class="w-1/2 py-3 bg-pink-500 text-white rounded-full font-bold shadow-lg hover:bg-pink-600">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL FORM EDIT (Tetap Sama) --}}
    <div x-show="openEdit" class="fixed inset-0 z-[60] flex items-center justify-center bg-pink-900/20 backdrop-blur-sm p-4" style="display: none;" x-transition>
        <div class="bg-white w-full max-w-md p-6 md:p-10 rounded-[30px] md:rounded-[50px] shadow-2xl border border-pink-50 max-h-[90vh] overflow-y-auto">
            <h3 class="font-serif text-2xl text-pink-900 mb-2 font-bold italic text-center underline decoration-pink-200">Edit Product</h3>
            <p class="text-pink-400 text-[10px] mb-6 italic text-center uppercase tracking-widest font-bold">Updating your collection</p>
            
            <form action="{{ route('pengelolaan') }}" method="GET" class="space-y-4"> {{-- Arahkan ke route yang sama --}}
            <input type="hidden" name="username" value="{{ $username }}">
                <div>
                    <label class="text-[10px] uppercase font-bold text-pink-300 ml-4 italic">Flower Name</label>
                    <input type="text" x-model="editItem.nama" class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none">
                </div>
                
                <div>
                    <label class="text-[10px] uppercase font-bold text-pink-300 ml-4 italic">Category</label>
                    <select x-model="editItem.kategori" class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none font-bold text-pink-700">
                        <option>Premium Bouquet</option>
                        <option>Single Flower</option>
                        <option>Vintage Dried</option>
                    </select>
                </div>

                <div class="flex gap-4">
                    <div class="w-1/2">
                        <label class="text-[10px] uppercase font-bold text-pink-300 ml-4 italic">Stock</label>
                        <input type="text" x-model="editItem.stok" class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none font-bold text-pink-700">
                    </div>
                    <div class="w-1/2">
                        <label class="text-[10px] uppercase font-bold text-pink-300 ml-4 italic">Price</label>
                        <input type="text" x-model="editItem.harga" class="w-full px-6 py-3 rounded-full bg-pink-50 border-none focus:ring-2 focus:ring-pink-300 outline-none font-bold text-pink-700">
                    </div>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="button" @click="openEdit = false" class="w-1/2 py-3 text-pink-400 font-bold">Cancel</button>
                    <button type="submit" class="w-1/2 py-3 bg-blue-500 text-white rounded-full font-bold shadow-lg hover:bg-blue-600">Update Data</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection