<?php

use App\Http\Controllers\SisController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tamplate2', function () {
    return view('admin.template');
});

Route::prefix('admin')->controller(SisController::class)->group(function () {
    Route::get('tabel', 'tabel');
    Route::get('/coba', 'index');
});

Route::get('users/{id}', function ($id) {});

Route::post('users/{id}', function ($id) {});

Route::put('users/{id}', function ($id) {});

Route::delete('users/{id}', function ($id) {});

Route::get('/coba1', function () {
    return 'Ini laravel saya';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya adalah '. $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Pemjumlahan adalah: '. $nilai1 + $nilai2;
});

Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil Pengurangan adalah: '. $nilai1 - $nilai2;
});

Route::get('template', function () {
    return view('template');
});

Route::get('/tabel', function () {
    $data = ['meja', 'kursi', 'pensil', 'lampu', 'bolpoin',];
    // return view('table', ['barang' => $data, 'data' => $data]);
    return view('table', compact('data'));
});

Route::get('halo', function (Request $request) {
    // $barang = ['meja', 'kursi', 'pensil'];
    // echo $barang[2];
    // return response()->json($barang);
    // return $request->nama;
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('upload', UploadController::class);
