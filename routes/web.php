<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerdaganganController;
use App\Http\Controllers\PerikananController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\DataExportController;
use App\Http\Controllers\BkuController;
use App\Models\Bku;

// Login Logout
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [AuthController::class, 'register_form'])->name('register_form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route Controller Dashboard
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/perikanan', [PerikananController::class, 'index'])->name('perikanan');
Route::get('/dashboard/perdagangan', [PerdaganganController::class, 'index'])->name('perdagangan');
Route::get('/dashboard/perkebunan', [PerkebunanController::class, 'index'])->name('perkebunan');
Route::get('/dashboard/bku', [BkuController::class, 'index'])->name('bku');


// Route Controller Bku
Route::get('/dashboard/bku/create', [BkuController::class, 'create']);
Route::post('/dashboard/bku', [BkuController::class, 'store']);
Route::get('/dashboard/bku/{id}', [BkuController::class, 'show']);
Route::get('/dashboard/bku/{id}/edit', [BkuController::class, 'edit']);
Route::patch('/dashboard/bku/{id}', [BkuController::class, 'update']);
Route::delete('/dashboard/bku/{id}', [BkuController::class, 'destroy']);

// Route Controller kwitansi
Route::get('/kwitansi', [BkuController::class, 'kwitansi'])->name('kwitansi');
Route::get('/kwitansi/{id}', [BkuController::class, 'print_kwitansi'])->name('print_kwitansi');

// Route Controller Perikanan
Route::get('/dashboard/perikanan/kolam_timur', [PerikananController::class, 'kolam_timur']);
Route::get('/dashboard/perikanan/kolam_barat', [PerikananController::class, 'kolam_barat']);
Route::get('/dashboard/perikanan/jumlah_ikan', [PerikananController::class, 'jumlah_ikan']);
Route::get('/dashboard/perikanan/create', [PerikananController::class, 'create']);
Route::post('/dashboard/perikanan', [PerikananController::class, 'store']);
Route::get('/dashboard/perikanan/{id}', [PerikananController::class, 'show']);
Route::get('/dashboard/perikanan/{id}/edit', [PerikananController::class, 'edit']);
Route::patch('/dashboard/perikanan/{id}', [PerikananController::class, 'update']);
Route::delete('/dashboard/perikanan/{id}', [PerikananController::class, 'destroy']);
Route::get('/dashboard/perikanan/panen/{season}', [PerikananController::class, 'musim_panen']);

// Route Controller Perdagangan
Route::get('/dashboard/perdagangan/kalkulator', [PerdaganganController::class, 'kalkulator']);
Route::post('/dashboard/perdagangan/calculate', [PerdaganganController::class, 'calculate'])->name('perdagangan.calculate');
Route::get('/dashboard/perdagangan/create', [PerdaganganController::class, 'create']);
Route::post('/dashboard/perdagangan', [PerdaganganController::class, 'store']);
Route::get('/dashboard/perdagangan/{id}', [PerdaganganController::class,'show']);
Route::get('/dashboard/perdagangan/{id}/edit', [PerdaganganController::class, 'edit']);
Route::patch('/dashboard/perdagangan/{id}', [PerdaganganController::class, 'update']);
Route::delete('/dashboard/perdagangan/{id}', [PerdaganganController::class, 'destroy']);


// Route delete data kolam timur
Route::delete('/dashboard/perikanan/kolam-timur/delete-all', [PerikananController::class, 'deleteAllKolamTimur'])->name('perikanan.kolam_timur.deleteAll');
// Route delete data kolam Barat
Route::delete('/dashboard/perikanan/kolam-barat/delete-all', [PerikananController::class, 'deleteAllKolamBarat'])->name('perikanan.kolam_barat.deleteAll');

// Route weather
Route::get('/weather', [WeatherController::class, 'getWeather']);

// Rout download data
Route::get('/download', [DashboardController::class, 'download'])->name('download');
Route::get('/download-excel', [DataExportController::class, 'exportExcel'])->name('data.exportExcel');






















// test laravel
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/tambah-data/settingkolam', [DashboardController::class, 'settingkolam'])->name('settingkolam');
Route::get('/tambah-data/settingkebun', [DashboardController::class, 'settingkebun'])->name('settingkebun');
Route::get('tambah-data/settingbarang', [DashboardController::class, 'settingbarang'])->name('settingbarang');
Route::get('tambah-data/settingbku', [DashboardController::class, 'settingbku'])->name('settingbku');

// Cara membuat controller 
// php artisan make:controller AdminController