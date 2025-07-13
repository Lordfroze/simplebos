<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kwitansi</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        background: #f5f5f5;
        padding: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .receipt {
        width: 400px;
        padding: 20px;
        border: 2px solid #000;
        border-radius: 20px 20px 0 0;
        /* Sudut melengkung di atas */
        position: relative;
        background-color: white;
        text-align: center;
        font-size: 14px;
    }

    .kwitansi {
        width: 800px;
        border: 2px solid #000;
        border-radius: 20px;
        padding: 30px;
        background-color: white;
        position: relative;
    }

    .header {
        margin: 0;
        font-size: 24px;
        text-transform: uppercase;
        border-bottom: 2px solid #000;
        padding-bottom: 10px;
        margin-bottom: 20px;

        text-align: center;
        margin-bottom: 30px;
        position: relative;
    }

    .header h2 {
        margin: 0;
        letter-spacing: 2px;
    }

    .header p {
        margin: 5px 0;
        font-size: 12px;
    }

    .header .kode {
        position: absolute;
        top: 0;
        right: 0;
        border: 1px solid #000;
        padding: 5px 10px;
        font-size: 14px;
    }

    .content {
        width: 100%;
        margin-bottom: 30px;
        font-size: 16px;
    }

    .content td {
        padding: 5px;
        vertical-align: top;
    }

    .jumlah {
        margin: 30px 0;
        padding: 20px;
        background: #eee;
        font-size: 22px;
        text-align: center;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .ttd {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        font-size: 14px;
    }

    .ttd div {
        text-align: center;
        width: 30%;
    }

    .details {
        text-align: left;
        margin-bottom: 20px;
    }

    .details p {
        display: flex;
        margin: 5px 0;
        justify-content: space-between;
    }

    .details .label {
        font-weight: bold;
        width: 180px;
        /* fixed width for label */
    }

    .details .value {
        flex: 1;
    }

    .code-box {
        border: 1px solid #000;
        display: inline-block;
        padding: 5px 10px;
        margin-left: 10px;
    }

    .amount {
        text-align: right;
        font-size: 18px;
        margin: 20px 0;
        border-top: 2px solid #000;
        border-bottom: 2px solid #000;
        padding: 10px 0;
    }

    .footer {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        margin-top: 20px;
    }

    .footer p {
        margin: 0;
    }

    .signatures {
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
    }

    .signatures p {
        margin: 5px 0;
    }

    .signatures .name {
        font-weight: bold;
    }

    .signatures .nip {
        font-size: 10px;
    }

    .table {
        border-style: ;
        text-align: justify;
    }

    .table th {
        text-align: left;
    }

    .table td {
        text-align: left;
    }

    .table-footer {
        font-size: small;
    }
</style>

<body>
    <div class="receipt">
        <div class="header">
            <h1>Kwitansi</h1>
            <p>(Tanda Bukti Pembayaran)</p>
            <div class="code-box">No. Kode : 232</div>
        </div>

        <!-- membuat table berisi detail kwitansi -->
        <table class="table">
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
                <td>: Langganan Internet Indihome/Speedy Tgl. 17-05-2024</td>
            </tr>

        </table>
        <!-- <div class="details">
            <p><span class="label">Sudah terima dari :</span> Kepala SDN 1 Kalimaro</p>
            <p><span class="label">Banyaknya uang :</span>Empat Ratus Lima Puluh Ribu Rupiah</p>
            <p><span class="label">Untuk Pembayaran :</span>Dibayar Langganan Internet Indihome/Speedy Tgl. 17-05-2024
            </p>
        </div> -->
        <div class="amount">
            Rp. 450.000,00
        </div>
        <!-- <div class="footer">
            <p>Sudah terima dari: <br> Kepala Sekolah</p>
            <p>Lunas dibayar, 17-05-2024 <br> Bendahara</p>
            <p>Kalimaro, 17 Mei 2024 <br> Yang menerima untuk dibayarkan</p>
        </div>
        <div class="signatures">
            <p>SUMARNO, S.Pd <br> NIP. 196550502 199103 1 010</p>
            <p>IKA NOVIYANTI, S.Pd <br> NIP. 19861122 201903 2 007</p>
            <p>IKA NOVIYANTI, S.Pd <br> NIP. 19861122 201903 2 007</p>
        </div> -->
        <table class="table-footer" border="0">
            <tr>
            <td>Sudah terima dari <br> Kepala Sekolah</td>
            <td>Lunas dibayar, 17-05-2024 <br> Bendahara</td>
            <td>Kalimaro, 17 Mei 2024 <br> Yang menerima untuk dibayarkan</td>
            </tr>
            <tr>
                <th><p><br><br></p></th>
                <th><p><br><br></p></th>
                <th><p><br><br></p></th>
            </tr>
            <tr>
                
                <td>SUMARNO, S.Pd <br> NIP. 196550502 199103 1 010</td>
                <td>IKA NOVIYANTI, S.Pd <br> NIP. 19861122 201903 2 007</td>
                <td>IKA NOVIYANTI, S.Pd <br> NIP. 19861122 201903 2 007</td>
            </tr>
        </table>
        </div>
    </div>
</body>

</html>