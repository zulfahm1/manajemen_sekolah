<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\SiswaController;
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
    return view('includes.home');
});

Route::resource('/home', HomeController::class);
Route::resource('/pendidikan', PendidikanController::class);
Route::resource('/pekerjaan', PekerjaanController::class);
Route::resource('/siswa', SiswaController::class);
