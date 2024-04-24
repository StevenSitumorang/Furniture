@extends('layout.transaksi')

@section('title', 'Aplikasi Web Penjualan Furniture')

@section('content')
<div class="main px-20 py-10">
<div class="checkout-container flex justify-between mx-40">
  <div class="checkout-section billing-details w-full md:w-3/5 mb-4 md:mb-0 mr-10">
    <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4">Detail Pemesan</h2>
    <form class="p-4">
      <input type="text" placeholder="Nama Depan" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="text" placeholder="Nama Belakang" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="email" placeholder="Email" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="tel" placeholder="No. Hp" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="text" placeholder="Kode Pos" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="text" placeholder="Alamat" class="w-full px-4 py-2 mb-4 border rounded-md">
      <input type="text" placeholder="Unit No." class="w-full px-4 py-2 mb-4 border rounded-md">
      <select class="w-full px-4 py-2 mb-4 border rounded-md">
        <option value="batam">Batam</option>
        <option value="singapore">Singapore</option>
      </select>
    </form>
  </div>
  <div class="checkout-section payment-method w-full md:w-2/5 mb-4 md:mb-0 ml-10">
    <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4">Metode Pengiriman</h2>
    <form class="p-4">
      <p>Silakan pilih metode pengiriman yang diinginkan untuk digunakan pada pesanan ini.</p><br>
      <label for="pengiriman_standar" class="mb-2 flex items-center">
        <input type="radio" id="pengiriman_standar" name="delivery_method" value="pengiriman_standar" class="mr-2">
        Pengiriman Standar
      </label>
      <label for="pengambilan_di_tempat" class="mb-2 flex items-center">
        <input type="radio" id="pengambilan_di_tempat" name="delivery_method" value="pengambilan_di_tempat" class="mr-2">
        Pengambilan di Tempat
      </label>
    </form>
    <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4 mt-4">Metode Pembayaran</h2>
    <form class="p-4">
      <p>Silakan pilih metode pembayaran yang diinginkan untuk digunakan pada pesanan ini.</p><br>
      <label for="bank_transfer" class="mb-2 flex items-center">
        <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" class="mr-2">
        Bank Transfer
      </label>
      <label for="card" class="mb-2 flex items-center">
        <input type="radio" id="card" name="payment_method" value="card" class="mr-2">
        Kartu Kredit atau Debit (Diproses dengan aman oleh Stripe)
      </label>
      <label for="paypal" class="mb-4 flex items-center">
        <input type="radio" id="paypal" name="payment_method" value="paypal" class="mr-2">
        Pembayaran Ekspres PayPal
      </label>
      <input type="checkbox" id="terms" name="terms" class="mr-2">
      <label for="terms">Saya telah membaca dan menyetujui Syarat & Ketentuan</label><br>
      <button class="submit-btn mt-4 bg-black text-white px-10 py-2 rounded cursor-pointer">Lanjut</button>
    </form>
  </div>
</div>

<div class="checkout-container flex justify-between mx-40">
    <div class="checkout-section order-summary w-3/5">
      <h2 class="text-xl border-b-2 border-gray-300 pb-2 mb-4">Rincian Pesanan</h2>
      <table class="invoice-table w-full">
        <tr>
          <th class="px-4 py-2">GAMBAR</th>
          <th class="px-4 py-2">NAMA PRODUK</th>
          <th class="px-4 py-2">JUMLAH</th>
          <th class="px-4 py-2">HARGA</th>
        </tr>
        <tr>
          <td class="px-4 py-2 align-top"><img src="{{ asset('images/Ranjang.webp') }}" alt="" width="100"></td>
          <td class="px-4 py-2 align-top">
            <p class="font-bold">LEIRVIK</p>
            <p class="text-sm">Tepi kasur, putih, 200 cm</p>
          </td>
          <td class="px-4 py-2 align-top">x 1</td>
          <td class="px-4 py-2 align-top">Rp400,000</td>
        </tr>
      </table>
      <div class="totals mt-4">
        <table class="totals-table w-full border-t border-gray-300 ">
          <tr class="line-item">
            <td class="label">Sub-Total:</td>
            <td>Rp400,000</td>
          </tr>
          <tr class="line-item">
            <td class="label">Pengiriman Standar:</td>
            <td>Rp100,000</td>
          </tr>
          <tr class="line-item">
            <td class="label">PPN (9%):</td>
            <td>Rp45,000</td>
          </tr>
          <tr class="line-item">
            <td class="label">Total:</td>
            <td>Rp545,000</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
