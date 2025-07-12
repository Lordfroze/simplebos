@extends('layouts.app')
@section('title')
Input Buku Kas Umum
@endsection

@section('content')
<div class="content">
    <form method="POST" action="{{url ('/dashboard/bku')}}">
        @csrf
        <div class="mb-3">
            <label for="nomorbukti" class="form-label">Nomor Bukti</label>
            <input type="text" class="form-control" id="nomorbukti" name="nomorbukti" value="" placeholder="BNU1">
        </div>

        <div class="mb-3">
            <label for="nomorkode" class="form-label">Nomor Kode</label>
            <input type="text" class="form-control" id="nomorkode" name="nomorkode" value="" placeholder="001">
        </div>

        <div class="mb-3">
            <label for="hari" class="form-label">Hari</label>
            <input type="text" class="form-control" id="hari" name="hari" value="" placeholder="senin">
        </div>

        <div class="mb-3">
            <label for="pelunasan" class="form-label">Pelunasan</label>
            <input type="date" class="form-control" id="pelunasan" name="pelunasan" required>
        </div>

        <div class="mb-3">
            <label for="pembelian" class="form-label">Pembelian</label>
            <input type="date" class="form-control" id="pembelian" name="pembelian" required>
        </div>

        <div class="mb-3">
            <label for="uraian" class="form-label">Uraian</label>
            <!-- <input type="" class="form-control" id="uraian" name="uraian" value="" placeholder="senin"> -->
            <textarea class="form-control" id="uraian" rows="3" name="uraian"></textarea>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>

        <div class="mb-3">
            <label for="terbilang" class="form-label">Terbilang</label>
            <input type="text" class="form-control" id="terbilang" name="terbilang" value="" placeholder="satu juta">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection