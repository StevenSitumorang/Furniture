<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function ListProduct()
    {
        $dataBarang = [
            ['id' => 1, 'produk' => 'Meja Belajar Futuristik', 'harga' => 1000000],
            ['id' => 2, 'produk' => 'Meja Kantor', 'harga' => 200000],
            ['id' => 3, 'produk' => 'Meja Dinding Lipat', 'harga' => 120000],
            ['id' => 4, 'produk' => 'Meja Makan Berkolam', 'harga' => 200000000],
            ['id' => 5, 'produk' => 'Meja Setrika', 'harga' => 70000],
        ];

        return $dataBarang;
    }

    public function tampilkan(){
        $data = $this->ListProduct();
        return view('list_product', compact('data'));
    }

}