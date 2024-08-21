<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/test", [\App\Http\Controllers\SimpleController::class, 'test']);
Route::get("/user", [\App\Http\Controllers\UserController::class, 'index']);
Route::post("/store-user", [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');
Route::get("/hello", [\App\Http\Controllers\UserController::class, 'hello']);
