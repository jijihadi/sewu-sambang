<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/pemesanan_tiket', [HomeController::class, 'pemesanan_tiket']);

Route::get('/home', function () {
    return view('home');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Route::get('/tiket_wisata', [HomeController::class, 'tiket_wisata']);
Route::post('/beli_wisata', [HomeController::class, 'beli_wisata']);
Route::get('/detail_pemesanan/{id_pesanan}', [HomeController::class, 'detail_pemesanan']);
Route::get('/bayar_tiket/{id_tiket}', [HomeController::class, 'bayar_tiket']);
Route::post('/proses_bayar', [HomeController::class, 'proses_bayar']);
Route::get('/cetak_tiket/{id_tiket}', [HomeController::class, 'cetak_tiket']);


Route::get('/tiket_camping', [HomeController::class, 'tiket_camping']);
Route::post('/beli_camping', [HomeController::class, 'beli_camping']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');
Route::get('/admin/data_pembelian', [AdminController::class, 'data_pembelian']);
Route::get('/admin/detail_pembelian/{kode}', [AdminController::class, 'detail_pembelian']);
Route::get('/admin/hapus_pembelian/{kode}', [AdminController::class, 'hapus_pembelian']);

Route::get('/admin/data_pemesanan', [AdminController::class, 'data_pemesanan']);
Route::get('/admin/detail_pemesanan/{kode}', [AdminController::class, 'detail_pemesanan']);
Route::get('/admin/bayar_tiket/{kode}', [AdminController::class, 'bayar_tiket']);
Route::get('/admin/aduan_tiket/{kode}', [AdminController::class, 'aduan_tiket']);

Route::get('/admin/data_fasilitas', [AdminController::class, 'data_fasilitas']);
Route::get('/admin/edit_fasilitas/{id}', [AdminController::class, 'edit_fasilitas']);
Route::get('/admin/hapus_fasilitas/{id}', [AdminController::class, 'hapus_fasilitas']);
Route::post('/admin/update_fasilitas', [AdminController::class, 'update_fasilitas']);

Route::get('/admin/data_customer', [AdminController::class, 'data_customer']);
Route::get('/admin/hapus_customer/{id}', [AdminController::class, 'hapus_customer']);
Route::get('/admin/data_admin', [AdminController::class, 'data_admin']);
Route::get('/admin/hapus_admin/{id}', [AdminController::class, 'hapus_admin']);
