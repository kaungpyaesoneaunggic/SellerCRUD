<?php

use App\Http\Controllers\SellerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('seller')->group(
    function () {
        Route::get('/', [SellerController::class,'index'])->name('seller.index');
        Route::get('/create', [SellerController::class,'create'])->name('seller.create');
        Route::post('/', [SellerController::class,'store'])->name('seller.store');
        Route::get('/edit/{id}', [SellerController::class,'edit'])->name('seller.edit');
        Route::put('/update/{id}', [SellerController::class,'update'])->name('seller.update');
        Route::delete('/destroy/{id}', [SellerController::class,'destroy'])->name('seller.destroy');
        Route::get('/show/{id}', [SellerController::class,'show'])->name('seller.show');
});