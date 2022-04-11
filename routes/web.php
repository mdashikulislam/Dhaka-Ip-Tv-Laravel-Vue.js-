<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('landing');
Route::get('channel/{slug}',[\App\Http\Controllers\ChannelController::class,'index'])->name('channel.details');
Route::get('channel-category/{slug}',[\App\Http\Controllers\ChannelController::class,'channelCategory'])->name('channel.category');
Route::get('live-tv',[\App\Http\Controllers\ChannelController::class,'liveTv'])->name('live.tv');
Route::get('scrapping',[\App\Http\Controllers\ScrappingController::class,'index']);
Route::get('search',[\App\Http\Controllers\HomeController::class,'search'])->name('search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


