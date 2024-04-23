<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public Function getData()
    {
        $dataBarang = [
            ['id' => 1, 'nama' => 'Meja Belajar Futuristik', 'harga' => 1000000],
            ['id' => 2, 'nama' => 'Meja Kantor', 'harga' => 200000],
            ['id' => 3, 'nama' => 'Meja Dinding Lipat', 'harga' => 120000],
            ['id' => 4, 'nama' => 'Meja Makan Berkolam', 'harga' => 200000000],
            ['id' => 5, 'nama' => 'Meja Setrika', 'harga' => 70000],
        ];

        return $dataBarang;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}