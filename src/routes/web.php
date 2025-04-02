<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StoreController;
use App\Models\Store;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index']);
Route::middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'index']);
});
Route::get('/',[ContactController::class,'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts',[ContactController::class,'create']);
