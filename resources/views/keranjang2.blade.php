<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">    
<title>Keranjang Furniture</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .header {
    background-color: black;
    padding: 30px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
  }
  .product {
  border: 1px solid #ddd;
  margin-bottom: 10px;
  padding: 10px;
  display: flex;
  align-items: center;
  }
  .product-checkbox {
  margin-right: 30px;
  margin-left: 20px;
  }
  .header img {
  height: 30px;
  }

.nav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  }

.nav li {
  display: inline;
  margin-right: 25px;
  margin-left: 10px;
  }

.nav a {
  text-decoration: none;
  color: white;
  }

.search-form {
  margin-right: 20px;
  }

.right-nav {
  display: flex;
  align-items: center;
  }

.left-nav {
  display: flex;
  align-items: center;
  }

  .main {
    padding: 20px;
  }
  .product {
    border: 1px solid #ddd;
    margin-bottom: 10px;
    margin-right: 300px;
    margin-left: 300px;
    padding: 20px;
    display: flex;
    align-items: center;
  }
  .product img {
    width: 170px;
    height: 170px;
    margin-right: 50px;
  }
  .product-info {
    flex-grow: 1;
  }
  .quantity-input {
            width: 50px;
  }
  .summary-section {
    flex: 0 0 30%;
    padding: 20px;
    border: 1px solid #ddd;
    background-color: white;
  }
  .summary-section h2 {
    margin-top: 0;
  }
  .product-payment {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    margin-right: 200px;
    margin-left: 700px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
</style>

</head>
<body>

<div class="header">
  <div class="left-nav">
  <img src="{{ asset($logoPath) }}" alt="" width="150" height="50">
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="right-nav">
    <div class="search-form">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <ul class="nav">
      <li><a href="#"><i class="bi bi-bag"></i></a></li>
      <li><a href="#"><i class="bi bi-person"></i></a></li>
    </ul>
  </div>
</div>


<div class="main">
  <center><h2>Keranjang Belanja </h2></center>
  <!-- Ulangi blok produk ini untuk setiap produk -->

@foreach($produk as $item)
<div class="main">
    <div class="product">
        <input type="checkbox" class="product-checkbox">
        <img src="{{ asset('images/' . $item['gambar']) }}" alt="">
        <div class="product-info">
            <strong>{{ $item['nama_produk'] }}</strong>
            <p>Varian: {{ $item['varian'] }}</p>
            <p>Harga: Rp{{ $item['harga'] }}</p>
        </div>
        <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="button" onclick="decrementValue()">-</button>
        </div>
        <input type="text" id="quantity" class="form-control" value="1" min="1" step="1" style="width: 30px;">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" onclick="incrementValue()">+</button>
        </div>
        <button style="margin-right: 30px;">Hapus</button>
    </div>
</div>
@endforeach

<div class="main">
<div class="product-payment">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <div>
    <input type="checkbox" id="select-all">
    <label for="select-all">Pilih Semua</label>
  </div>
  <div>
    <p>Total Barang: -</p>
    <p>Total Harga: -</p>
    <select>
      <option>Metode Pembayaran</option>
    </select>   
    <input type="text" placeholder="Alamat Pengiriman">
    <button>Checkout</button>
  </div>
  </div>
</div>
</div>
</div>

<script>
        function incrementValue() {
            var value = parseInt(document.getElementById('quantity').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('quantity').value = value;
        }

        function decrementValue() {
            var value = parseInt(document.getElementById('quantity').value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                document.getElementById('quantity').value = value;
            }
        }
    </script>
</body>
</html>