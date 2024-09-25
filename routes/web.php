<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CityController::class, 'index'])->name('home');
Route::get('/{citySlug}', [CityController::class, 'showCity'])->name('city.show');

Route::group(['prefix' => '{citySlug}'], function () {
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('news', [NewsController::class, 'index'])->name('news');
});


