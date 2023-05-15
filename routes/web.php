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
Route::patch('/announcement/accept/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name ('acceptAnnouncement');
Route::patch('/announcement/refuse/{announcement}', [RevisorController::class, 'refuseAnnouncement'])->name ('refuseAnnouncement');

// Rotte footer

Route::get('/workWithUs', [RevisorController::class,'workWithUs'])->middleware('auth')->name('workWithUs');
Route::get('/revisor/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');
Route::get('/recheck', [RevisorController::class, 'recheck'])->name('recheck');
Route::post('revisor/defDelete/{announcement}', [RevisorController::class,'defDelete'])->name('defDelete');


Route::get('/ricerca/annuncio', [AnnouncementController::class, 'searchAnnouncement'])->name('searchAnn');
