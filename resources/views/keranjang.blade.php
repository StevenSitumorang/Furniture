@extends('layout.keranjang')

@section('title', 'Aplikasi Web Penjualan Furniture')

@section('content')


<div class="main px-20 py-10">
  <h2 class="text-center text-3xl font-bold mb-8">Keranjang Belanja</h2>

  <div class="shopping-cart w-3/4 mx-auto">
    <div class="product-header flex font-bold pb-4">
    <div class="flex-1 ml-10 mr-60">PRODUK</div>
      <div class="flex-1 text-center ml-20">JUMLAH</div> <!-- Mengurangi margin kiri -->
      <div class="flex-1 text-center mr-40">HARGA</div> <!-- Mengurangi margin kanan -->
    </div>

    <!-- Ulangi blok produk ini untuk setiap produk --> 
    <div class="bg-white shadow-md rounded-md overflow-hidden mb-6">
      <div class="flex items-center py-4 px-6 border-b border-gray-200">
        <div class="flex items-center flex-1">
          <input type="checkbox" class="ml-4 mr-8">
          <img src="{{ asset('images/Ranjang.webp') }}" alt="Product Image" class="w-24 h-24 mr-8">
          <div>
            <strong class="block mr-80">LEIRVIK</strong>
            <p class="text-gray-600">Tepi kasur, putih, 200 cm</p>
          </div>
        </div>  
        <div class="flex items-center justify-center flex-1 ml-9">
          <button class="bg-gray-300 px-3 py-1 rounded-l-md">-</button>
          <input type="text" value="1" class="text-center w-10 h-8 border border-gray-300">
          <button class="bg-gray-300 px-3 py-1 rounded-r-md">+</button>
        </div>
        <p class="flex-1 text-center mr-10">Rp400,000</p>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md mr-4">Hapus</button>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-md overflow-hidden mb-6">
      <div class="flex items-center py-4 px-6 border-b border-gray-200">
        <div class="flex items-center flex-1">
          <input type="checkbox" class="ml-4 mr-8">
          <img src="{{ asset('images/RanjangTingkat.webp') }}" alt="Product Image" class="w-24 h-24 mr-8">
          <div>
            <strong class="block mr-80">LEIRVIK</strong>
            <p class="text-gray-600">Tepi kasur, putih, 200 cm</p>
          </div>
        </div>  
        <div class="flex items-center justify-center flex-1 ml-9">
          <button class="bg-gray-300 px-3 py-1 rounded-l-md">-</button>
          <input type="text" value="1" class="text-center w-10 h-8 border border-gray-300">
          <button class="bg-gray-300 px-3 py-1 rounded-r-md">+</button>
        </div>
        <p class="flex-1 text-center mr-10">Rp2,000.000</p>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md mr-4">Hapus</button>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-md overflow-hidden mb-6">
      <div class="flex items-center py-4 px-6 border-b border-gray-200">
        <div class="flex items-center flex-1">
          <input type="checkbox" class="ml-4 mr-8">
          <img src="{{ asset('images/SetMeja.webp') }}" alt="Product Image" class="w-24 h-24 mr-8">
          <div>
            <strong class="block mr-80">LEIRVIK</strong>
            <p class="text-gray-600">Tepi kasur, putih, 200 cm</p>
          </div>
        </div>  
        <div class="flex items-center justify-center flex-1 ml-9">
          <button class="bg-gray-300 px-3 py-1 rounded-l-md">-</button>
          <input type="text" value="1" class="text-center w-10 h-8 border border-gray-300">
          <button class="bg-gray-300 px-3 py-1 rounded-r-md">+</button>
        </div>
        <p class="flex-1 text-center mr-10">Rp1,000.000</p>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md mr-4">Hapus</button>
      </div>
    </div>
</div>

    <!-- Total dan Checkout -->
    <div class="shopping-cart w-1/3 mx-auto float-right mr-40">
    <div class="bg-white shadow-md rounded-md p-6 mb-6">
      <div class="flex items-center justify-between">
        <div>
          <input type="checkbox" id="select-all" class="mr-2">
          <label for="select-all">Pilih Semua</label>
        </div>
        <div class="text-right">
          <label class="font-semibold">Total:</label>
          <span class="text-xl font-bold ml-2">Rp3,400.000</span>
        </div>
      </div>
      <button class="bg-black text-white px-4 py-2 rounded-md mt-4 w-full">Checkout</button>
    </div>
  </div><br><br><br><br><br><br><br><br>

</div>
@endsection
