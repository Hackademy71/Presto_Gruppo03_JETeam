<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class,'welcome'])->name('welcome');
Route::get('/articleNew', [AnnouncementController::class, 'create'])->name('articleNew');
Route::get('/category/{category}', [FrontController::class,'categoryShow'] )->name('categoryShow');
Route::get('/annunci/detArticle/{announcement}', [AnnouncementController::class, 'show'])->name('detArticle');
Route::get('/indexAnnouncement', [AnnouncementController::class, 'index'])->name('indexAnnouncement');