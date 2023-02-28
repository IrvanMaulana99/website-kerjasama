<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\TkksdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//profile
Route::get('/latarbelakang', [ProfileController::class, 'showLatarBelakang'])->name('latarbelakang');
Route::get('/dasar-hukum', [ProfileController::class, 'showDasarHukum'])->name('dasar-hukum');
Route::get('/personil', [ProfileController::class, 'showPersonil'])->name('personil');
Route::get('/layanan', [ProfileController::class, 'showLayanan'])->name('layanan');
Route::get('/pk', [ProfileController::class, 'showPk'])->name('pk');
Route::get('/ik', [ProfileController::class, 'showIk'])->name('ik');
Route::get('/kontak', [ProfileController::class, 'showKontak'])->name('kontak');
//pengajuan
Route::get('/pengajuan', [PengajuanController::class, 'showPengajuan'])->name('pengajuan');
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
// Route::post('/pengajuan', 'PengajuanController@store')->name('pengajuan.store');
//index
Route::get('/welcome', [HomeController::class, 'showHome'])->name('welcome');
//monev
Route::get('/ksdd', [MonevController::class, 'showKsdd'])->name('ksdd');
Route::get('/ksdpk', [MonevController::class, 'showKsdpk'])->name('ksdpk');
Route::get('/sinergitas', [MonevController::class, 'showSinergitas'])->name('sinergitas');
Route::get('/ksdpl', [MonevController::class, 'showKsdpl'])->name('ksdpl');
Route::get('/ksdll', [MonevController::class, 'showKsdll'])->name('ksdll');
//Monitoring
Route::get('/rekapitulasi', [MonitoringController::class, 'showRekapitulasi'])->name('rekapitulasi');
Route::get('/layananpublik', [MonitoringController::class, 'showLayananpublik'])->name('layananpublik');
//tkksd
Route::get('/tkksd', [TkksdController::class, 'showTkksd'])->name('tkksd');
// Route::get('/tkksd-award', 'TkksdController@showTkksdAward')->name('tkksd');
Route::get('/tkksd-award', [TkksdController::class, 'showTkksdaward'])->name('tkksd-award');
Route::get('/kaledoiskop', [TkksdController::class, 'showKaledoiskop'])->name('kaledoiskop');
//berita
Route::get('/berita', [BeritaController::class, 'showBerita'])->name('berita');

