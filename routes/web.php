<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\TranslateController;
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
    return view('posts');
});

Route::get('/translate', [TranslateController::class, 'index'])->name('translate');
Route::get('lang/{locale}', [LocalizationController::class, 'lang'])->name('lang');

