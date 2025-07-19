@extends('layouts.app')
@section('title')
Print Kwitansi {{$bkus->nomorbukti}}
@endsection

@section('content')
<form method="GET" action="" id="printForm">
  @method('GET')
  @csrf
  <div class="content">
    <div class="mb-3">
      <label for="nomorbukti" class="form-label">Nomor Bukti</label>
      <input type="text" class="form-control" id="nomorbukti" name="nomorbukti" value="{{$bkus->nomorbukti}}" placeholder="BNU1">
    </div>

    <div class="mb-3">
      <label for="nomorkode" class="form-label">Nomor Kode</label>
      <input type="text" class="form-control" id="nomorkode" name="nomorkode" value="{{$bkus->nomorkode}}" placeholder="001">
    </div>

    <div class="mb-3">
      <label for="hari" class="form-label">Hari</label>
      <input type="text" class="form-control" id="hari" name="hari" value="{{$bkus->hari}}" placeholder="senin">
    </div>

    <div class="mb-3">
      <label for="pelunasan" class="form-label">Pelunasan</label>
      <input type="date" class="form-control" id="pelunasan" name="pelunasan" value="{{ $bkus->pelunasan->format('Y-m-d') }}" required>
    </div>

    <div class="mb-3">
      <label for="pembelian" class="form-label">Pembelian</label>
      <input type="date" class="form-control" id="pembelian" name="pembelian" value="{{ $bkus->pembelian->format('Y-m-d') }}" required>
    </div>

    <div class="mb-3">
      <label for="uraian" class="form-label">Uraian</label>
      <!-- <input type="" class="form-control" id="uraian" name="uraian" value="" placeholder="senin"> -->
      <textarea class="form-control" id="uraian" rows="3" name="uraian">{{$bkus->uraian}}</textarea>
    </div>

    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$bkus->jumlah}}" required>
    </div>

    <div class="mb-3">
      <label for="terbilang" class="form-label">Terbilang</label>
      <input type="text" class="form-control" id="terbilang" name="terbilang" value="{{$bkus->terbilang}}" placeholder="satu juta">
    </div>


    <h2>Pilih template kwitansi</h2>
    <div class="mb-3">
      <label for="template" class="form-label">Template</label>
      <select class="form-select" id="template" name="template" required>
        <option value="">Pilih template</option>
        <option value="indomaret">Indomaret</option>
        <option value="template2">Template 2</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Print</button>
</form>

<script>
  document.getElementById('printForm').addEventListener('submit', function(e) {
    e.preventDefault(); // prevent default form submission

    const template = document.getElementById('template').value;
    if (!template) {
      alert('Please select a template');
      return;
    }

    // Construct the URL dynamically based on selected template and bkus id
    const bkusId = "{{ $bkus->id }}";
    const url = `/kwitansi/${bkusId}/${template}`;

    // Open the URL in a new tab
    window.open(url, '_blank');
  });
</script>



</div>

@endsection