<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PublicController::class,'welcome'])->name('welcome');
Route::get('/articleNew', [AnnouncementController::class, 'create'])->name('articleNew');
Route::get('/category/{category}', [FrontController::class,'categoryShow'] )->name('categoryShow');
Route::get('/annunci/detArticle/{announcement}', [AnnouncementController::class, 'show'])->name('detArticle');
Route::get('/indexAnnouncement', [AnnouncementController::class, 'index'])->name('indexAnnouncement');

//Rotte per i Revisori

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('indexRevisor');