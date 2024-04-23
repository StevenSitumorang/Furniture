<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keranjang2 extends Controller
{
    public function keranjang2()
    {
        $produk = [
            ['nama_produk' => 'Meja Belajar Futuristik', 'varian' => '1', 'harga' => 7000000, 'gambar' => 'Ranjang.webp'],
            ['nama_produk' => 'Meja Kantor', 'varian' => '2', 'harga' => 12000000, 'gambar' => 'RanjangTingkat.webp'],
            ['nama_produk' => 'Meja Dinding Lipat', 'varian' => '3', 'harga' => 1400000, 'gambar' => 'SetMeja.webp'],
        ];

        $logoPath = 'images/logo.png';

        return view('keranjang2', compact('produk', 'logoPath'));
    }
}