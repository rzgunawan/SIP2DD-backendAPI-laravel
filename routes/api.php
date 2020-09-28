<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\HomeController;

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

	Route::get('/menu', [HomeController::class, 'menu']);
	Route::get('/highlight', [HomeController::class, 'highlight']);
	Route::get('/pojaknas', [HomeController::class, 'pojaknas']);
	Route::get('/layanan', [HomeController::class, 'layanan']);
	Route::get('/galeri', [HomeController::class, 'galeri']);
	Route::get('/event', [HomeController::class, 'event']);
	Route::post('/pencarian', [HomeController::class, 'pencarian']);

});




