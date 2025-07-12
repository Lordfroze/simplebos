@extends('layouts.app')
@section('title')
Detail {{$bkus->nomorkode}}
@endsection

@section('content')
<div class="container">
        <article class="blog-post">
        <p class="blog-post-meta">Tanggal dibuat : {{date("d M Y", strtotime($bkus->created_at))}}</p>
        <p>Nomor Bukti : {{$bkus->nomorbukti}}</p>
        <p>Nomor Kode : {{$bkus->nomorkode}}</p>
        <p>Hari : {{$bkus->hari}}</p>
        <p>Pelunasan : {{$bkus->pelunasan}}</p>
        <p>Pembelian : {{$bkus->pembelian}}</p>
        <p>Uraian : {{$bkus->uraian}}</p>
        <p>Jumlah : {{$bkus->jumlah}}</p>
        <p>Terbilang : {{$bkus->terbilang}}</p>
        <!-- <p>Harga Jual : Rp {{ number_format($bkus->harga_jual, 0, ',', '.') }}</p> -->
        </article>
        <a href="{{ url('/dashboard/bku') }}">Kembali</a>
    </div>
@endsection