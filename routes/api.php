<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\NewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1'], function(){

	// Beranda
	Route::get('/menu', [HomeController::class, 'menu']);

	Route::get('/highlight', [HomeController::class, 'highlight']);
	Route::get('/highlightdetail', [HomeController::class, 'highlightdetail']);

	Route::get('/pojaknas', [HomeController::class, 'pojaknas']);
	Route::get('/pojaknasdetail', [HomeController::class, 'pojaknasdetail']);

	Route::get('/layanan', [HomeController::class, 'layanan']);
	Route::get('/layanandetail', [HomeController::class, 'layanandetail']);
	
	Route::get('/kegiatan', [HomeController::class, 'kegiatan']);
	Route::get('/kegiatandetail', [HomeController::class, 'kegiatandetail']);

	Route::post('/pencarian', [HomeController::class, 'pencarian']);

	// Belum dipakai
	Route::get('/galeri', [HomeController::class, 'galeri']);

	// Halaman Berita
	Route::get('/berita', [NewsController::class, 'index']);
	Route::get('/berita/kategori', [NewsController::class, 'kategori']);
	Route::post('/pencarianberita', [NewsController::class, 'pencarianberita']);
	Route::get('/beritadetail', [NewsController::class, 'beritadetail`']);

	// Halaman Pemda

	// Halaman Regulasi

	// Halaman Kolaborasi

	// Halaman Bantuan User

	// Dashboard ETP

});




