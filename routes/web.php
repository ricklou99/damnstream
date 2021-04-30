<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/watch/{slug}', [PostController::class, 'episode'])->name('posts.show');
Route::get('/subbed-hentai', [PostController::class, 'shentai'])->name('posts.shentai');
Route::get('/dubbed-hentai', [PostController::class, 'dhentai'])->name('posts.dhentai');
Route::get('/hentai/{slug}', [PostController::class, 'hentai'])->name('posts.hentai');
Route::get('/search', [PostController::class, 'search'])->name('posts.search');