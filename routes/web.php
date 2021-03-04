<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/artist', [App\Http\Controllers\ArtistController::class, 'index'])->name('artist');
Route::get('/artist/{id}', [App\Http\Controllers\ArtistController::class, 'show'])->name('artist');

Route::get('/locality', [App\Http\Controllers\LocalityController::class, 'index'])->name('locality');
Route::get('/locality/{id}', [App\Http\Controllers\LocalityController::class, 'show'])->name('locality');

Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
Route::get('/type/{id}', [App\Http\Controllers\TypeController::class, 'show'])->name('type');

Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role');
Route::get('/role/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('role');

Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location');
Route::get('/location/{id}', [App\Http\Controllers\LocationController::class, 'show'])->name('location');

Route::get('/show', [App\Http\Controllers\ShowController::class, 'index'])->name('show');
Route::get('/show/{id}', [App\Http\Controllers\ShowController::class, 'show'])->name('show');

Route::get('representation', [App\Http\Controllers\RepresentationController::class, 'index'])->name('representation');
Route::get('representation/{id}', [App\Http\Controllers\RepresentationController::class, 'show'])->name('representation');

