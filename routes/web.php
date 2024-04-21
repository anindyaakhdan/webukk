<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenggunaController;

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

// Route::get('/', function () {
//     return view('welcome');
// }); 

// Route::get('/', function () {
//     return view('beranda');
// });
// Route::get('/buku', function () {
//     return view('buku');
// });
// Route::get('/pengguna', function () {
//     return view('pengguna');
// });
// Route::get('/peminjaman', function () {
//     return view('peminjaman');
// });
// Route::get('/auth', [LoginController::class,'index']);
// Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
// Route::get('/login', [LoginController::class,'login']);
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/home', [LoginController::class,'store'])->name('login.store');
Route::post('/login', [LoginController::class,'logout'])->name('logout');

Route::get('/home',[BerandaController::class,'index']);

Route::get('/buku', [BukuController::class,'index']);
Route::get('/buku/tambah', [BukuController::class,'create']);
Route::post('/buku/store', [BukuController::class,'store']);
Route::get('/buku/{id}/edit', [BukuController::class,'edit']);
Route::put('/buku/{id}', [BukuController::class,'update']);
Route::delete('/buku/{id}', [BukuController::class,'destroy']);

Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/kategori/tambah', [KategoriController::class,'create']);
Route::post('/kategori/store', [KategoriController::class,'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class,'edit']);
Route::put('/kategori/{id}', [KategoriController::class,'update']);
Route::delete('/kategori/{id}', [KategoriController::class,'destroy']);

Route::get('/pengguna', [PenggunaController::class,'index']);
Route::get('/pengguna/tambah', [PenggunaController::class,'create']);
Route::post('/pengguna/store', [PenggunaController::class,'store']);
Route::get('/pengguna/{id}/edit', [PenggunaController::class,'edit']);
Route::put('/pengguna/{id}', [PenggunaController::class,'update']);
Route::delete('/pengguna/{id}', [PenggunaController::class,'destroy']);

Route::get('/peminjaman', [PeminjamanController::class,'index']);
Route::get('/peminjaman/tambah', [PeminjamanController::class,'create']);
Route::post('/peminjaman/store', [PeminjamanController::class,'store']);
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class,'edit']);
Route::put('/peminjaman/{id}', [PeminjamanController::class,'update']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class,'destroy']);
