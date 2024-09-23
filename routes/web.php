<?php

use App\Http\Controllers\Pengelola2Contoller;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\SessionController;
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
    return view('tables');
})->name('tables');
Route::get('/input/{id_skpd}',[PengelolaController::class,'input'])->name('pencatatan.input');
Route::post('/klik/{id_skpd}', [PengelolaController::class, 'klik'])->name('pencatatan.klik');
Route::post('/submit', [PengelolaController::class, 'submit'])->name('pencatatan.submit');
Route::get('/tambahtables',[PengelolaController::class,'tambah'])->name('pencatatan.tambah');
Route::get('/pengelola/{id_skpd}',[Pengelola2Contoller::class,'pengelola'])->name('pencatatan.pengelola');
Route::get('/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');
Route::post('/hubungi/{id_skpd}',[Pengelola2Contoller::class,'hubungi'])->name('pencatatan.hubungi');
Route::post('/enter', [Pengelola2Contoller::class, 'enter'])->name('pencatatan.enter');
Route::post('/delete/{id_skpd}',[PengelolaController::class, 'delete'])->name('pencatatan.delete');
Route::get('/login',[SessionController::class,'index']);
Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);
