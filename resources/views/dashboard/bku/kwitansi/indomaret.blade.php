<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kwitansi</title>
    <style>
        @page {
            size: A4 portrait;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 120px;
            display: block;
            justify-content: center;
            align-items: center;
        }

        .kwitansi {
            width: 15cm;
            border: 2px solid #000;
            border-radius: 20px;
            padding: 20px;
            background-color: white;
            box-sizing: border-box;
            /* margin: 0 auto 30px auto; */
            position: relative;
            display: block;
        }

        /* BOX ATAS */
        .bku-box {
            position: absolute;
            top: 10px;
            left: 750px;
            display: inline-block;
            background: #fff;
            border: 2px solid #000;
            padding: 6px 18px;
            font-weight: bold;
            font-size: 15px;
            z-index: 10;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        .page-break {
            page-break-before: always;
            break-before: page;
            display: block;
            width: 15cm;
            margin: 30px auto 0 auto;
        }

        .outer-border {
            border: 3px solid black;
            /* garis luar hitam */
            padding: 4px;
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

        table.info td,
        table.info th {
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
            background: repeating-linear-gradient(-45deg,
                    #ccc,
                    #ccc 2px,
                    #eee 2px,
                    #eee 5px);
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            width: 14cm;

            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            /* Ensure background prints */
            print-color-adjust: exact;
            /* For other browsers */
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

        /* Hide elements with class 'no-print' when printing */
        @media print {
            .no-print {
                display: none !important;
            }
        }

        /* CSS PAGE 2 */
        .header {
            text-align: left;
            margin-bottom: 10px;
        }

        .company-name {
            font-size: 14px;
        }

        .address {
            font-size: 10px;
            margin-bottom: 5px;
        }

        .npwp {
            font-size: 10px;
            margin-bottom: 10px;
        }

        .receipt-title {
            text-align: center;
            margin: 10px 0;
        }

        .detail {
            margin-bottom: 5px;
        }

        .label {
            display: inline-block;
            width: 120px;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 10px 0;
        }

        .dividerfooter {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }

        .footer {
            font-size: 10px;
            text-align: center;
            margin-top: 10px;
        }

        .transaction-details {
            margin-top: 10px;
        }

        .transaction-line {
            margin-bottom: 3px;
        }

        .total-section {
            margin-top: 10px;
        }

        .right-align {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .indomaret {
            width: 8cm;
            /* Adjust width to typical receipt size */
            font-size: 10px;
            /* Optional: smaller font for receipt */
            padding: 5px;
            /* Optional: reduce padding */
            box-sizing: border-box;
        }
    </style>

</head>

<body>
    <!-- BOX ATAS -->
    <div class="bku-box">{{$bkus->nomorbukti}}</div>
    </div>

    <div class="outer-border">
        <div class="kwitansi">
            <div class="header">
                <h1>Kwitansi</h1>
                <p>(Tanda Bukti Pembayaran)</p>
                <div class="code-box">No.Kode :{{$bkus->nomorkode}}</div>
            </div>

            <table class="info">
                <tr>
                    <th>Sudah terima dari</th>
                    <td>: Kepala SDN 1 Kalimaro</td>
                </tr>
                <tr>
                    <th>Banyaknya uang</th>
                    <td>: {{$bkus->terbilang}}</td>
                </tr>
                <tr>
                    <th>Untuk Pembayaran</th>
                    <td>: {{$bkus->uraian}}</td>
                </tr>
            </table>

            <div class="amount-container">
                <div class="amount-label">Rp.</div>
                <div class="amount-box"><i>{{number_format($bkus->jumlah, 0, ',', '.')}}</i></div>
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
            </table>
            <div style="margin-top: 20px; text-align: center;">
                <button class="no-print" onclick="window.print()">Print Kwitansi</button>
                <button class="no-print" onclick="window.print()">Print Struk Pembelian</button>
            </div>
        </div>
    </div>


    <!-- PAGE 2 -->
    <div class="page-break">
        <div class="indomaret">
            <div class="header">
                <div class="company-name">PT INDOMARCO PRISMATAMA</div>
                <div class="address">GEDUNG MENARA INDOMARET</div>
                <div class="address">BOULEVARD PANTAI INDAH KAPUK</div>
                <div class="address">JAKARTA UTARA</div>
                <div class="npwp">NPWP 013379946092000</div>
                <div>06-02-2025 &nbsp;&nbsp;&nbsp;&nbsp; 13:59:58 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 238550203108</div>
            </div>

            <div class="receipt-title">SLIP PEMBAYARAN</div>

            <div class="detail">
                <span class="label">Kode Pembayaran</span>: <span class="value">131236115685</span>
            </div>
            <div class="divider"></div>
            <div class="detail">
                <span class="label">Merchant/Biller</span>: <span class="value">Telkom Speedy</span>
            </div>
            <div class="detail">
                <span class="label">No.Pelanggan</span>: <span class="value">131236115685</span>
            </div>
            <div class="detail">
                <span class="label">Nama Pelanggan</span>: <span class="value">SDN 1 KALIMARO</span>
            </div>

            <div class="divider"></div>

            <div class="detail">
                <span class="label">--Detail Tagihan 1-</span>
            </div>
            <div class="detail">
                <span class="label">Periode</span>: <span class="value">01-2025</span>
            </div>
            <div class="detail">
                <span class="label">Nilai</span>: <span class="value">450.000</span>
            </div>
            <div class="detail">
                <span class="label">No. Referensi</span>: <span class="value">63498333676100VR</span>
            </div>
            <div class="detail">
                <span class="label">RP. Bayar</span>: <span class="value">452.500</span>
            </div>

            <div class="footer">
                HARAP STRUK INI DISIMPAN SEBAGAI TANDA<br>
                BUKTI PEMBAYARAN YANG SAH TERIMA KASIH<br>
                CALL CENTER : 500770
            </div>

            <div class="dividerfooter"></div>

            <div class="transaction-details">
                <div>06-02-2025 : 13:59:58/2225/TJBI 49336/HILDA/02</div>
                <div class="dividerfooter"></div>
                <div class="transaction-line">PEMBAYARAN INDIHOME 1 &nbsp;&nbsp;&nbsp;&nbsp; 450.000 &nbsp;&nbsp;&nbsp;&nbsp; 450.000</div>
                <div class="transaction-line"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; BIAYA ADM. : 2.500</div>
                <div class="dividerfooter"></div>
                <div class="transaction-line"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; HARGA JUAL : 452.500</div>
                <div class="dividerfooter"></div>
                <div class="total-section">
                    <div class="transaction-line">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 452.500</div>
                    <div class="transaction-line">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; TUNAI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 453.000</div>
                    <div class="transaction-line">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; KEMBALI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 500</div>
                </div>

            </div>

            <div class="transaction-line">PPN :DPP= 2.703 PPN=297</div>
            <div class="transaction-line">NON PPN :DPP= 450.000</div><br>
            <div class="transaction-line">LAYANAN KONSUMEN SMS 0811 1500 280</div>
            <div class="transaction-line">CALL 1500 280 - KONTAK@INDOMARET.CO.ID</div>
        </div>

    </div>
</body>