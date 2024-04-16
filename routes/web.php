<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

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

Route::get('/chart1', [SiteController::class, 'chart1']);
Route::get('/chart2', [SiteController::class, 'chart2']);
Route::get('/chart3', [SiteController::class, 'chart3']);
Route::get('/chart4', [SiteController::class, 'chart4']);
Route::get('/chart5', [SiteController::class, 'chart5']);
