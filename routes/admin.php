<?php
use Illuminate\Support\Facades\Route;
//Admin Route
Route::prefix('admin')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin.home');
    Route::prefix('channel')->group(function (){
        Route::get('/',function (){return redirect()->route('channel.index');});
        Route::get('index',[App\Http\Controllers\Admin\ChannelController::class,'index'])->name('channel.index');
        Route::get('create',[App\Http\Controllers\Admin\ChannelController::class,'create'])->name('channel.create');
        Route::post('store',[App\Http\Controllers\Admin\ChannelController::class,'store'])->name('channel.store');
    });
});
