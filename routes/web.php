<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::group(['prefix' => 'v1'], function(){
//     /* Auth routes */
//     Route::group(['prefix' => '/home'], function(){
//         Route::get('/menu', '');
//         Route::get('/highlight', '');
//         Route::get('/pojaknas', '');
//         Route::get('/layanan', '');
//         Route::get('/galeri', '');
//         Route::get('/event', '');



//         Route::post('/search', '');
//     });

// });

//Route::get('menu', [HomeController::class, 'index']);
