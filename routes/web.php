<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/driver', [App\Http\Controllers\DriverController::class, 'index'])->name('driver');

Route::get('/driver/create', [App\Http\Controllers\DriverController::class, 'create'])->name('createDriver');

Route::post('/driver/store', [App\Http\Controllers\DriverController::class, 'store'])->name('storeDriver');

Route::get('/driver/{id}/edit', [App\Http\Controllers\DriverController::class, 'update'])->name('editDriver');

Route::put('/driver/{id}', [App\Http\Controllers\DriverController::class, 'put'])->name('putDriver');

Route::delete('/delete/{id}', [App\Http\Controllers\DriverController::class, 'delete'])->name('destroy');
