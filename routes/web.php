<?php

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

Route::get('/', [App\Http\Controllers\WebControllers\MainController::class, 'actionWebMain'])->name('actionWebMain');
Route::get('/book', [App\Http\Controllers\WebControllers\MainController::class, 'actionWebBook'])->name('actionWebBook');
Route::get('/games', [App\Http\Controllers\WebControllers\MainController::class, 'actionWebGames'])->name('actionWebGames');
Route::get('/games/play/{game}', [App\Http\Controllers\WebControllers\MainController::class, 'actionWebGamesView'])->name('actionWebGamesView');
