<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice Layout</title>
<style>
body {
    font-family: 'didot';
}

.invoice-container {
    width: 45%;
    margin-top: 10px;
    margin-left: 150px;
    display: flex;
    justify-content: space-between;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
}

.invoice-details {
    flex: 1;
}

.invoice-table {
    width: 100%;
    border-collapse: collapse;
}

.invoice-table th,
.invoice-table td {
    border: none;
    padding: 8px;
}

.invoice-table th {
    background-color: #f2f2f2;
    text-align: left;
}

.totals-table {
    border-collapse: collapse;
    margin-top: 20px;
    width: 100%; /* Set width to 100% */
    border-top: 1px solid #ddd; /* Add top border */
}

.totals-table td {
    padding: 5px 10px;
    text-align: right; /* Align text to the right */
}

.totals-table .label {
    text-align: right; /* Align text to the right */
}

.totals-table .line-item {
    border-top: 1px solid #ddd;
}


.vertical-line {
    border-left: 1px solid #ddd;
    padding-left: 10px;
}

</style>
</head>
<body>

<div class="invoice-container">
  <div class="invoice-details">
    <table class="invoice-table">
      <tr>
        <th>GAMBAR</th>
        <th>NAMA PRODUK</th>
        <th>JUMLAH</th>
        <th>HARGA</th>
      </tr>
      <tr>
        <td><img src="your-image-url.jpg" alt="Product Image" width="100"></td>
        <td>
          Boston<br>
          [View]<br>
          Dimensions L180 x D90 x H75cm<br>
          Material Greece Volakas White..<br>
          Leg Colour Gold Stainless Steel
        </td>
        <td>x 1</td>
        <td>$3,179.00</td>
      </tr>
      <div class="totals">
    <table class="totals-table">
      <tr class="line-item">
        <td class="label">Sub-Total:</td>
        <td>$3,179.00</td>
      </tr>
      <tr class="line-item">
        <td class="label">Standard Delivery:</td>
        <td>$90.00</td>
      </tr>
      <tr class="line-item">
        <td class="label">GST (9%):</td>
        <td>$286.11</td>
      </tr>
      <tr class="line-item">
        <td class="label">Total:</td>
        <td>$3,555.11</td>
      </tr>
    </table>
  </div>
    </table>
  </div>
</div>

</body>
</html>
    