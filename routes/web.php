<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderMenuController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('/order', [OrderMenuController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('guest');
Route::post('/admin', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');

Route::get('/admin/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/admin/menu/create', [MenuController::class, 'create'])->middleware('auth');
Route::post('/admin/menu/create', [MenuController::class, 'store'])->middleware('auth');
