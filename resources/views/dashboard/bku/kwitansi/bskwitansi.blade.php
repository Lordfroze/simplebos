<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kwitansi</title>
  <!-- Load Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @page {
      size: A4 portrait;
    }
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 100px 0;
    }
    .outer-border {
      border: 2px solid #000;
      border-radius: 24px;
      padding: 8px;
      display: inline-block;
    }
    .kwitansi {
      max-width: 600px;
      margin: auto;
      border: 2px solid #000;
      border-radius: 20px;
      padding: 20px;
      background-color: white;
    }
    .bku-box {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #fff;
      border: 2px solid #000;
      padding: 6px 18px;
      font-weight: bold;
      font-size: 15px;
      z-index: 10;
    }
    .header h1 {
      font-size: 20px;
      text-transform: uppercase;
    }
  </style>
</head>

<body>
  <div class="container position-relative">
    <div class="bku-box">BKU</div>

    <!-- Tambahkan lapisan border luar untuk efek 2 lapis -->
    <div class="outer-border">
      <div class="kwitansi shadow">
        <div class="header text-center mb-4">
          <h1>Kwitansi Pembayaran</h1>
          <p class="mb-0">Nomor: 001/ABC/2025</p>
        </div>

        <div class="mb-3">
          <p>Sudah terima dari: <strong>Nama Pengirim</strong></p>
          <p>Uang sejumlah: <strong>Rp 1.000.000</strong></p>
          <p>Untuk pembayaran: <strong>Biaya administrasi</strong></p>
        </div>

        <div class="row">
          <div class="col-6"></div>
          <div class="col-6 text-right">
            <p>Bandung, 19 Juli 2025</p>
            <p class="mt-5">(Nama Penerima)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
