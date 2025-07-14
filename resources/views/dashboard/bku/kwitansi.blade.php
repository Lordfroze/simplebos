<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kwitansi</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .kwitansi {
            width: 20cm;
            border: 2px solid #000;
            border-radius: 20px;
            padding: 30px;
            background-color: white;
            box-sizing: border-box;
        }
		
			.outer-border {
			border: 3px solid black;   /* garis luar hitam */
			padding: 1px;
			border-radius: 24px;
			display: inline-block;
		}


        .header {
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .header p {
            margin: 5px 0;
            font-size: 12px;
        }

        .code-box {
            position: absolute;
            top: 0;
            right: 0;
            border: 1px solid #000;
            padding: 4px 8px;
            font-size: 12px;
        }

        table.info {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 25px;
            font-size: 14px;
        }

        table.info td, table.info th {
            padding: 5px;
            vertical-align: top;
            text-align: left;
        }

        .amount-container {
            display: flex;
            align-items: center;
            margin: 30px 0;
        }

        .amount-label {
            font-weight: bold;
            font-size: 14px;
			width: 3cm; 
            margin-right: 2px;
			margin-left: 20px;
			text-align: center;
        }

        .amount-box {
            background: repeating-linear-gradient(
			-45deg,
			#ccc,
			#ccc 2px,
			#eee 2px,
			#eee 5px );
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            width: 14cm; 
          
            box-sizing: border-box;
        }

        .ttd-table {
            width: 100%;
            text-align: center;
            font-size: 12px;
        }

        .ttd-table td {
            width: 33%;
            vertical-align: top;
        }

        .ttd-space {
            height: 50px;
        }

        .ttd-name {
            font-weight: bold;
        }

        .nip {
            font-size: 10px;
        }
    </style>
</head>
<body>
<div class="outer-border">

    <div class="kwitansi">
        <div class="header">
            <h1>Kwitansi</h1>
            <p>(Tanda Bukti Pembayaran)</p>
            <div class="code-box">No. Kode : {{$bkus->nomorkode}} </div>
        </div>

        <table class="info">
            <tr>
                <th>Sudah terima dari</th>
                <td>: Kepala SDN 1 Kalimaro</td>
            </tr>
            <tr>
                <th>Banyaknya uang</th>
                <td>: Empat Ratus Lima Puluh Ribu Rupiah</td>
            </tr>
            <tr>
                <th>Untuk Pembayaran</th>
                <td>: Dibayar Langganan Internet Indihome/Speedy Tgl. 17-05-2024</td>
            </tr>
        </table>

        <div class="amount-container">
            <div class="amount-label">Rp.</div>
            <div class="amount-box"><i>450.000,00</i></div>
        </div>

        <table class="ttd-table">
            <tr>
                <td>Setuju dibayar<br>Kepala Sekolah</td>
                <td>Lunas dibayar, 17-05-2024<br>Bendahara</td>
                <td>Kalimaro, 17 Mei 2024<br>Yang menerima untuk dibayarkan</td>
            </tr>
            <tr class="ttd-space">
                <td><br><br></td>
                <td><br><br></td>
                <td><br><br></td>
            </tr>
            <tr>
                <td class="ttd-name">SUMARNO, S.Pd<br><span class="nip">NIP. 19650502 199103 1 010</span></td>
                <td class="ttd-name">IKA NOVIYANTI, S.Pd<br><span class="nip">NIP. 19861122 201903 2 007</span></td>
                <td class="ttd-name">IKA NOVIYANTI, S.Pd<br><span class="nip">NIP. 19861122 201903 2 007</span></td>
