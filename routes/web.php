<?php

use App\Http\Controllers\RumusController;
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

Route::get('/', [RumusController::class, 'index'])->name('tabung');
Route::get('/bola', [RumusController::class, 'volumeBola'])->name('bola');
Route::get('/kerucut', [RumusController::class, 'volumeKerucut'])->name('kerucut');
