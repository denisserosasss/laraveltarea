<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::resource('/factura', App\Http\Controllers\FacturaController::class);
Route::resource('/facturas', App\Http\Controllers\FacturaController::class);
Route::resource('/factura', App\Http\Controllers\FacturaController::class);
Route::resource('/factura', App\Http\Controllers\FacturaController::class);
