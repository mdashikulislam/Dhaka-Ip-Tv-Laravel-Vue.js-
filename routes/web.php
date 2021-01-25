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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin Route
Route::prefix('admin')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin.home');
    Route::prefix('channel')->group(function (){
        Route::get('/',function (){return redirect()->route('channel.index');});
        Route::get('index',[App\Http\Controllers\Admin\ChannelController::class,'index'])->name('channel.index');
        Route::get('create',[App\Http\Controllers\Admin\ChannelController::class,'create'])->name('channel.create');
    });
});
