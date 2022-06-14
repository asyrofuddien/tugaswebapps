<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/register',[AuthController::class, 'Daftar']);
Route::get('/',[AuthController::class, 'login']);
Route::post('/simpanuser',[AuthController::class, 'simpanuser']);
Route::post('/cekmasuk',[AuthController::class, 'cekmasuk']);

Route::get('home', [BlogController::class, 'home']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('mahasiswa', [BlogController::class, 'mahasiswa']);
