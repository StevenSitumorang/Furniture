<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function Keranjang()
    {
        
        return view('keranjang');
    }
}
