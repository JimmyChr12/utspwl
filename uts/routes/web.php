<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SaleController;

Route::resource('company', CompanieController::class);
Route::resource('customer', CustomerController::class);
Route::resource('item', ItemController::class);
Route::resource('sale', SaleController::class);
