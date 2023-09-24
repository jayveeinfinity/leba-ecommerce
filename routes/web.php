<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', function() {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', [LandingController::class, 'index'])->name('landing');

    Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('admin.cars.create');
    Route::get('/cars/edit', [CarController::class, 'edit'])->name('admin.cars.edit');

    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
});