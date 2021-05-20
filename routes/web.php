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
Route::get('/employee', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/{product}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/product/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit']);
Route::delete('/product/{produtc}', [\App\Http\Controllers\ProductController::class, 'destroy']);