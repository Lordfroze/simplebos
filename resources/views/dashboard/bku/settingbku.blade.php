@extends('layouts.app')
@section('title')
Setting BKU
@endsection

@section('content')
<div class="container">
    <form action="{{ route('settingbarang') }}" method="POST">
        <div class="card mb-4">
            <div class="card-header">
                <h2>Setting BKU</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="profilsekolah" class="form-label">Ubah Profil Sekolah</label>
                    <input type="text" class="form-control" id="profilsekolah" name="profilsekolah" required>
                </div>
                <div class="mb-3">
                    <label for="kepalasekolah" class="form-label">Ubah kepala sekolah</label>
                    <input type="number" class="form-control" id="kepalasekolah" name="kepalasekolah" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Semua Setting</button>
    </form>
</div>
@endsection
