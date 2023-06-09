<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderMenuController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/order', [OrderMenuController::class, 'index']);
Route::post('/order/create', [OrderMenuController::class, 'store']);

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->middleware('guest');
    Route::post('/', [AdminController::class, 'login']);

    Route::middleware(['auth'])->group(function() {
        Route::get('/logout', [AdminController::class, 'logout']);
        
        Route::get('/dashboard', [AdminController::class, 'dashboard']);

        Route::get('/menu', [MenuController::class, 'index']);
        Route::get('/menu/create', [MenuController::class, 'create']);
        Route::post('/menu/create', [MenuController::class, 'store']);
        Route::get('/menu/update/{menu:id}', [MenuController::class, 'edit']);
        Route::post('/menu/update/{menu:id}', [MenuController::class, 'update']);
        Route::delete('/menu/delete/{menu:id}', [MenuController::class, 'destroy']);
        
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::get('/categories/create', [CategoryController::class, 'create']);
        Route::post('/categories/create', [CategoryController::class, 'store']);
        Route::get('/categories/update/{category:id}', [CategoryController::class, 'edit']);
        Route::post('/categories/update/{category:id}', [CategoryController::class, 'update']);
        Route::delete('/categories/delete/{category:id}', [CategoryController::class, 'destroy']);

        Route::get('/order/details/{transaction:id}', [OrderMenuController::class, 'show']);
        Route::get('/order/update/{transaction:id}', [TransactionController::class, 'update']);
    });
});
