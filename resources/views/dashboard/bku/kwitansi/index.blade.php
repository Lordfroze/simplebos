@extends('layouts.app')
@section('title')
Cetak Kwitansi
@endsection

@section('content')
<!-- Main content -->
@if (session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<div class="content">
<p>Silahkan pilih template kwitansi yang akan di print</p>
</div>

@endsection