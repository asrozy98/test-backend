<?php

use App\Http\Controllers\NasabahController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return redirect('nasabah');
});

Route::get('nasabah', function () {
    return view('nasabah.index');
});
Route::get('transaksi', function () {
    return view('transaksi.index');
});
Route::get('poin', function () {
    return view('poin.index');
});
Route::get('laporan', function () {
    return view('laporan.index');
});
