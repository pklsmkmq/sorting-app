<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

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
    return view('index');
})->name('index');

Route::get('/addNilai', function () {
    return view('input');
})->name('addNilai');

Route::get('/sorting', [NilaiController::class,"sortNilai"])->name('sorting');
Route::get('/search', [NilaiController::class,"searchNilai"])->name('search');
Route::get('/selesai', [NilaiController::class,"selesai"])->name('selesai');

Route::post('/saveNilai',[NilaiController::class,"saveNilai"])->name("snilai");
Route::post('/cariNilai',[NilaiController::class,"cariNilai"])->name("cariNilai");