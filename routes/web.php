<?php

use App\Http\Controllers\KategoriUniversitasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TahunMasukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes([
    'register'=>false,
    'reset'=>false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('pages.v_login');
});

Route::get('/dashboard', 'DashboardController@index');

//User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/show/{id_mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa/edit/{id_mahasiswa}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{id_mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/destroy/{id_mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

//Kategori Universitas
Route::get('/kategori_universitas', [KategoriUniversitasController::class, 'index']);
Route::get('/kategori_universitas/create', [KategoriUniversitasController::class, 'create'])->name('kategori_universitas.create');
Route::post('/kategori_universitas', [KategoriUniversitasController::class, 'store'])->name('kategori_universitas.store');
Route::get('/kategori_universitas/edit/{id_kategori_universitas}', [KategoriUniversitasController::class, 'edit'])->name('kategori_universitas.edit');
Route::put('/kategori_universitas/update/{id_kategori_universitas}', [KategoriUniversitasController::class, 'update'])->name('kategori_universitas.update');
Route::get('/kategori_universitas/destroy/{id_kategori_universitas}', [KategoriUniversitasController::class, 'destroy'])->name('kategori_universitas.destroy');

//Tahun Masuk
Route::get('/tahun_masuk', [TahunMasukController::class, 'index']);
Route::get('/tahun_masuk/create', [TahunMasukController::class, 'create'])->name('tahun_masuk.create');
Route::post('/tahun_masuk', [TahunMasukController::class, 'store'])->name('tahun_masuk.store');
Route::get('/tahun_masuk/edit/{id_tahun_masuk}', [TahunMasukController::class, 'edit'])->name('tahun_masuk.edit');
Route::put('/tahun_masuk/update/{id_tahun_masuk}', [TahunMasukController::class, 'update'])->name('tahun_masuk.update');
Route::get('/tahun_masuk/destroy/{id_tahun_masuk}', [TahunMasukController::class, 'destroy'])->name('tahun_masuk.destroy');

//Kategori Fakultas


//Kategori Jurusan

