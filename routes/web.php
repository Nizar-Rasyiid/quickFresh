<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DriverController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AdminController::class,'index']);
Route::resource('driver', DriverController::class);
Route::get('/driver', [DriverController::class,'index'])->name('driver');
Route::post('/driver/store', [DriverController::class,'store'])->name('storeDriver');
Route::get('/driver/create', [DriverController::class,'create'])->name('createDriver');
Route::delete('/driverDelete/{id}', [DriverController::class,'destroy'])->name('deleteDriver');
Route::get('/driver/edit/{id}', [DriverController::class,'edit'])->name('editDriver');
// Route::put('/driver/update/{id}', [DriverController::class,'update'])->name('updateDriver');
Route::get('/pelanggan/food', [PelangganController::class,'food'])->name('food');
Route::get('/pelangganTable', [PelangganController::class,'dashboard'])->name('tablePelanggan');

Route::resource('pelanggan', PelangganController::class);

Route::resource('foods', FoodController::class);
Route::get('/foods', [FoodController::class,'index'])->name('foods');

