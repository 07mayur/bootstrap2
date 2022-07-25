<?php

use App\Http\Controllers\ProductController;
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
Route::get('/form',function (){
    return view('form');
});
Route::get('/table',function(){
    return view('table');
});

Route::post('store',[ProductController::class,'store'])->name('store');

Route::get('table',[ProductController::class,'table'])->name('table');

Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');

Route::post('update/{id}',[ProductController::class,'update'])->name('update');

Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');

