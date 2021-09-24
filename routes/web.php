<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    SearchController,
    RegisterController,
    SessionController,
    AccountController,
    WatchListController,
    FavouritesController
};

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/myasmr/{user}', [AccountController::class, 'myasmr'])->middleware('auth')->name('myasmr');
Route::get('/account', [AccountController::class, 'account'])->middleware('auth')->name('account');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/search/results', [SearchController::class, 'show']);

Route::post('/account/add/watchlist', [WatchListController::class, 'create']);
Route::post('/account/add/favourite', [FavouritesController::class, 'create']);