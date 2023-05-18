<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PublicController::class,'welcome'])->name('welcome');

//Rotte per Users
Route::get('/user/annunci', [FrontController::class,'userAnnouncements'])->name('userAnnouncements');

//Rotte per Annunci e Categorie

Route::get('/articleNew', [AnnouncementController::class, 'create'])->name('articleNew');
Route::get('/annunci/detArticle/{announcement}', [AnnouncementController::class, 'show'])->name('detArticle');
Route::get('/index/annunci', [AnnouncementController::class, 'index'])->name('indexAnnouncement');
Route::get('/category/{category}', [FrontController::class,'categoryShow'] )->name('categoryShow');

//Rotte per i Revisori

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('indexRevisor');
Route::get('/announcement/accept/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name ('acceptAnnouncement');
Route::get('/announcement/refuse/{announcement}', [RevisorController::class, 'refuseAnnouncement'])->name ('refuseAnnouncement');

// Rotte footer

Route::get('/workWithUs', [RevisorController::class,'workWithUs'])->middleware('auth')->name('workWithUs');
Route::get('/revisor/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');
Route::get('/revisor/recheck', [RevisorController::class, 'recheck'])->name('recheck');
Route::post('/revisor/defDelete/{announcement}', [RevisorController::class,'defDelete'])->name('defDelete');

//Rotte per ricerca e cambio lingua

Route::get('/ricerca/annuncio', [AnnouncementController::class, 'searchAnnouncement'])->name('searchAnn');
Route::post('/lingua/{lang}',[FrontController::class,'setLanguage'])->name('set_language_locale');

//Rotta segnalazione annunci

Route::get('/report/{announcement}', [AnnouncementController::class, 'reportAnnouncement'])->name('reportAnnouncement');
