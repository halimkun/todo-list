<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [TugasController::class, 'index'])->name("home");






















Route::get('/input-tugas', function () {
    return view('tugas.input');
})->name("input-tugas");

Route::get('/edit-tugas', function () {
    return view('tugas.edit');
})->name("edit-tugas");

// tugas selesai
Route::get('/tugas-selesai', function () {
    return view('tugas-selesai.tugas-selesai');
})->name("tugas-selesai");