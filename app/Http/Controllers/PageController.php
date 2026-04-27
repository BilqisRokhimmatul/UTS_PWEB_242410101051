<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function welcome(Request $request) {
        $username = $request->input('username', 'Staff');

        $products = [
            ['nama' => 'Eternal Rose', 'harga' => '350k', 'gambar' => 'image1.png'],
            ['nama' => 'Spring Tulip', 'harga' => '250k', 'gambar' => 'image2.png'],
            ['nama' => 'White Lily', 'harga' => '150k', 'gambar' => 'image3.png'],
            ['nama' => 'Dried Peony', 'harga' => '290k', 'gambar' => 'image4.png'],
            ['nama' => 'Sunlight Daisy', 'harga' => '120k', 'gambar' => 'image5.png'],
            ['nama' => 'Midnight Orchid', 'harga' => '550k', 'gambar' => 'image6.png'],
            ['nama' => 'Lavender Mist', 'harga' => '180k', 'gambar' => 'image7.png'],
            ['nama' => 'Baby Breath', 'harga' => '75k', 'gambar' => 'image8.png'],
            ['nama' => 'Red Amaryllis', 'harga' => '420k', 'gambar' => 'image9.png'],
            ['nama' => 'Hydrangea Blue', 'harga' => '310k', 'gambar' => 'image10.png'],
            ['nama' => 'Pink Carnation', 'harga' => '90k', 'gambar' => 'image1.png'],
            ['nama' => 'Classic Jasmine', 'harga' => '110k', 'gambar' => 'image3.png'],
            ['nama' => 'Golden Sunflower', 'harga' => '200k', 'gambar' => 'image5.png'],
            ['nama' => 'Blue Iris', 'harga' => '480k', 'gambar' => 'image6.png'],
            ['nama' => 'Sweet Magnolia', 'harga' => '380k', 'gambar' => 'image8.png'],
        ];

        return view('welcome', compact('username', 'products'));
    }

    public function dashboard(Request $request) {
        $username = $request->input('username', 'Staff');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request) {
    $username = $request->input('username', 'Staff');

    $items = [
        ['id' => 1, 'nama' => 'Eternal Rose', 'kategori' => 'Premium Bouquet', 'stok' => 15, 'harga' => '350k'],
        ['id' => 2, 'nama' => 'Spring Tulip', 'kategori' => 'Premium Bouquet', 'stok' => 10, 'harga' => '250k'],
        ['id' => 3, 'nama' => 'White Lily', 'kategori' => 'Single Flower', 'stok' => 5, 'harga' => '150k'],
        ['id' => 4, 'nama' => 'Dried Peony', 'kategori' => 'Vintage Dried', 'stok' => 8, 'harga' => '290k'],
        ['id' => 5, 'nama' => 'Sunlight Daisy', 'kategori' => 'Premium Bouquet', 'stok' => 20, 'harga' => '120k'],
        ['id' => 6, 'nama' => 'Midnight Orchid', 'kategori' => 'Premium Bouquet', 'stok' => 4, 'harga' => '550k'],
        ['id' => 7, 'nama' => 'Lavender Mist', 'kategori' => 'Vintage Dried', 'stok' => 12, 'harga' => '180k'],
        ['id' => 8, 'nama' => 'Baby Breath', 'kategori' => 'Vintage Dried', 'stok' => 30, 'harga' => '75k'],
        ['id' => 9, 'nama' => 'Red Amaryllis', 'kategori' => 'Premium Bouquet', 'stok' => 6, 'harga' => '420k'],
        ['id' => 10, 'nama' => 'Hydrangea Blue', 'kategori' => 'Premium Bouquet', 'stok' => 7, 'harga' => '310k'],
        ['id' => 11, 'nama' => 'Pink Carnation', 'kategori' => 'Single Flower', 'stok' => 25, 'harga' => '90k'],
        ['id' => 12, 'nama' => 'Classic Jasmine', 'kategori' => 'Single Flower', 'stok' => 18, 'harga' => '110k'],
        ['id' => 13, 'nama' => 'Golden Sunflower', 'kategori' => 'Premium Bouquet', 'stok' => 14, 'harga' => '200k'],
        ['id' => 14, 'nama' => 'Blue Iris', 'kategori' => 'Premium Bouquet', 'stok' => 3, 'harga' => '480k'],
        ['id' => 15, 'nama' => 'Sweet Magnolia', 'kategori' => 'Vintage Dried', 'stok' => 9, 'harga' => '380k'],
    ];

    return view('pengelolaan', compact('username', 'items'));
    }

    public function profile(Request $request) {
        $username = $request->input('username', 'Staff');
        return view('profile', compact('username'));
    }
}
