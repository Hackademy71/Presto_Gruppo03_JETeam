<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [FrontController::class,'welcome'])->name('welcome');
Route::get('/articleNew', [PublicController::class, 'articleNew'])->name('articleNew');
Route::get('/category/{category}', [FrontController::class,'categoryShow'] )->name('categoryShow');
