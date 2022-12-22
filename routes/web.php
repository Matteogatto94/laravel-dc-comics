<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\ComicController as GuestComicController;

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

//Route::get('/comics', [ComicController::class, 'comics'])->name('comics');

Route::get('/', [ComicController::class, 'index'])->name('home');

// Guest routes

Route::get('comics', [GuestComicController::class, 'index'])->name('guest.comics.index');
Route::get('comics/{comic}', [GuestComicController::class, 'show'])->name('guest.comics.show');

Route::resource('admin/comics', ComicController::class);
