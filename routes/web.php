<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductControllerController;

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

Route::get('/test',function() {
    return view('test');
});

Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::post('/product/update',[ProductController::class,'update'])->name('product.update');
Route::get('/product/{id}/delete',[ProductController::class,'delete'])->name('product.delete');



