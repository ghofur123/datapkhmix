<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataKpmController;
use App\Http\Controllers\Admin\FormStoreController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\SppdController;
use App\Http\Controllers\Admin\JenisGambarController;
use App\Http\Controllers\Admin\PenyalurController;
use App\Http\Controllers\Admin\JenisBantuanController;
use App\Http\Controllers\Admin\GambarController;
use App\Http\Controllers\Admin\StorageImagesController;
use App\Http\Controllers\Admin\JenisPelaporanController;
use App\Http\Controllers\Admin\StatusPelaporanController;
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

Route::get('/', [DashboardController::class, 'index']);
// 
Route::get('/data-kpm', [DataKpmController::class, 'index']);
Route::post('/data-kpm', [DataKpmController::class, 'store']);
// 
Route::get('/sppd', [SppdController::class, 'index']);
Route::post('/sppd', [SppdController::class, 'store']);
// 
Route::get('/jenis-gambar', [JenisGambarController::class, 'index']);
Route::get('/jenis-gambar/{id}', [JenisGambarController::class, 'show']);
Route::post('/jenis-gambar', [JenisGambarController::class, 'store']);
Route::put('/jenis-gambar', [JenisGambarController::class, 'update']);
Route::delete('/jenis-gambar', [JenisGambarController::class, 'destroy']);
// 
Route::get('/penyalur', [PenyalurController::class, 'index']);
Route::get('/penyalur/{id}', [PenyalurController::class, 'show']);
Route::post('/penyalur', [PenyalurController::class, 'store']);
Route::put('/penyalur', [PenyalurController::class, 'update']);
Route::delete('/penyalur', [PenyalurController::class, 'destroy']);
// 
Route::get('/gambar', [GambarController::class, 'index']);
Route::get('/gambar/{nik}', [GambarController::class, 'show']);
Route::post('/gambar', [GambarController::class, 'store']);
// Route::put('/gambar', [GambarController::class, 'update']);
Route::delete('/gambar', [GambarController::class, 'destroy']);
// 
Route::get('/jenis-bantuan', [JenisBantuanController::class, 'index']);
Route::get('/jenis-bantuan/{id}', [JenisBantuanController::class, 'show']);
Route::post('/jenis-bantuan', [JenisBantuanController::class, 'store']);
Route::put('/jenis-bantuan', [JenisBantuanController::class, 'update']);
Route::delete('/jenis-bantuan', [JenisBantuanController::class, 'destroy']);
// 
Route::get('/jenis-pelaporan', [JenisPelaporanController::class, 'index']);
Route::get('/jenis-pelaporan/{id}', [JenisPelaporanController::class, 'show']);
Route::post('/jenis-pelaporan', [JenisPelaporanController::class, 'store']);
Route::put('/jenis-pelaporan', [JenisPelaporanController::class, 'update']);
Route::delete('/jenis-pelaporan', [JenisPelaporanController::class, 'destroy']);
// 
Route::get('/status-pelaporan', [StatusPelaporanController::class, 'index']);
Route::get('/status-pelaporan/{id}', [StatusPelaporanController::class, 'show']);
Route::post('/status-pelaporan', [StatusPelaporanController::class, 'store']);
Route::put('/status-pelaporan', [StatusPelaporanController::class, 'update']);
Route::delete('/status-pelaporan', [StatusPelaporanController::class, 'destroy']);
// 
Route::get('/data-kpm-form-exel', [FormStoreController::class, 'DataKpmUploadExel']);
Route::get('/sppd-form-exel', [FormStoreController::class, 'SppdUploadExcel']);
Route::get('/form-jenis-gambar', [FormStoreController::class, 'jenisGambar']);
Route::get('/form-penyalur', [FormStoreController::class, 'penyalur']);
Route::get('/form-jenis-bantuan', [FormStoreController::class, 'jenisBantuan']);
Route::get('/form-jenis-bantuan', [FormStoreController::class, 'jenisBantuan']);
Route::get('/form-upload-image/{nik}/{jenisGambar}', [FormStoreController::class, 'uploadImage']);
Route::get('/form-jenis-pelaporan', [FormStoreController::class, 'jenisPelaporan']);
Route::get('/form-status-pelaporan', [FormStoreController::class, 'statusPelaporan']);
//
Route::get('/storage-images', [StorageImagesController::class, 'index']);
// 
Route::get('/download-template/{name}', [DownloadController::class, 'downloadExcelTemplate']);
