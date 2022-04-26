<?php
use Illuminate\Support\Facades\Route;
//Admin Route
Route::prefix('admin')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin.home');
    Route::prefix('channel-category')->group(function (){
        Route::get('index',[App\Http\Controllers\Admin\ChannelCategoryController::class,'index'])->name('channel.category.index');
        Route::get('create',[App\Http\Controllers\Admin\ChannelCategoryController::class,'create'])->name('channel.category.create');
        Route::post('store',[App\Http\Controllers\Admin\ChannelCategoryController::class,'store'])->name('channel.category.store');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\ChannelCategoryController::class,'edit'])->name('channel.category.edit');
        Route::put('update/{id}',[App\Http\Controllers\Admin\ChannelCategoryController::class,'update'])->name('channel.category.update');
        Route::delete('delete',[App\Http\Controllers\Admin\ChannelCategoryController::class,'destroy'])->name('channel.category.delete');
    });
    Route::prefix('channel')->group(function (){
        Route::get('index',[App\Http\Controllers\Admin\ChannelController::class,'index'])->name('channel.index');
        Route::get('create',[App\Http\Controllers\Admin\ChannelController::class,'create'])->name('channel.create');
        Route::post('store',[App\Http\Controllers\Admin\ChannelController::class,'store'])->name('channel.store');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\ChannelController::class,'edit'])->name('channel.edit');
        Route::put('update/{id}',[App\Http\Controllers\Admin\ChannelController::class,'update'])->name('channel.update');
    });
});
