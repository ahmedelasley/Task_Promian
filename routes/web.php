<?php

use App\Http\Livewire\ShowAlbum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumPicturesController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/albums', [AlbumController::class, 'index'])->name('albums');
Route::get('/show-album/{album}', [AlbumController::class, 'show'])->name('albums.show');
Route::post('/albums/{id}/pictures-store', [AlbumPicturesController::class, 'picturesStore'])->name('pictures.store');

