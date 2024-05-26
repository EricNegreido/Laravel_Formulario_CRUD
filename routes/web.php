<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [ProductosController::class, 'index']);
Route::get('/create', [ProductosController::class,'create']);
Route::get('/update', [ProductosController::class,'update']);
Route::get('/insert', [ProductosController::class,'store']);
Route::get('/delete', [ProductosController::class,'destroy']);
