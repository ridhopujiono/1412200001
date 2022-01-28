<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUtama;
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

Route::get('/', [ControllerUtama::class, 'index']);
Route::get('/utama', [ControllerUtama::class, 'halaman_utama']);
Route::get('/fakultas', [ControllerUtama::class, 'fakultas']);
Route::get('/akademik', [ControllerUtama::class, 'akademik']);
Route::get('/ambil_matkul', [ControllerUtama::class, 'ambil_matkul']);
Route::get('/lihat_hasil', [ControllerUtama::class, 'lihat_hasil']);
Route::get('/logout', [ControllerUtama::class, 'logout']);
Route::get('/hapus/{id}', [ControllerUtama::class, 'hapus']);
Route::post('/ambil_matkul', [ControllerUtama::class, 'post_ambil_matkul']);
Route::get('/ambil_matkul/{id}', [ControllerUtama::class, 'ambil_matkul2']);
Route::get('/sign-up', [ControllerUtama::class, 'regis']);
Route::post('/regis', [ControllerUtama::class, 'store']);
Route::post('/auth', [ControllerUtama::class, 'auth']);
