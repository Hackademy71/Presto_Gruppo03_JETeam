<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PublicController::class,'welcome'])->name('welcome');

//Rotte per Users
Route::get('/user/profile', [FrontController::class,'show'])->name('userProfile');
Route::get('/user', [UserController::class, "userProfile"])->name('userProfileModule');
Route::post('/postuser', [UserController::class, 'postUserData'])->name('postProfile');
Route::put('/profile/update/', [UserController::class, 'profileUpdate'])->name('profileUpdate');
Route::get('/contact', [UserController::class, 'contactUser'])->name('contactUser');
Route::get('/contact/module/{user}', [UserController::class, 'contactModule'])->name('contactModule');
//Rotte per Annunci e Categorie

Route::get('/articleNew', [AnnouncementController::class, 'create'])->name('articleNew');
Route::get('/annunci/detArticle/{announcement}', [AnnouncementController::class, 'show'])->name('detArticle');
Route::get('/index/annunci', [AnnouncementController::class, 'index'])->name('indexAnnouncement');
Route::get('/modifica/{announcement}',[AnnouncementController::class,'edit'])->name('modifyAnnouncement');
Route::get('/category/{category}', [FrontController::class,'categoryShow'] )->name('categoryShow');

//Rotte per i Revisori

// Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('indexRevisor');
Route::get('/announcement/accept/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name ('acceptAnnouncement');
Route::get('/announcement/refuse/{announcement}', [RevisorController::class, 'refuseAnnouncement'])->name ('refuseAnnouncement');
Route::post('/revisor/defDelete/{announcement}', [AnnouncementController::class,'destroy'])->name('defDelete');
Route::get('/berevisor',[RevisorController::class,'beRevisor'])->name('beRevisor');

// Rotte footer

Route::get('/workWithUs', [RevisorController::class,'workWithUs'])->middleware('auth')->name('workWithUs');
Route::get('/revisor/{user}', [RevisorController::class,'makeRevisor'])->name('make.revisor');
Route::get('/recheck', [RevisorController::class, 'recheck'])->middleware('isRevisor')->name('recheck');


//Rotte per ricerca e cambio lingua

Route::get('/ricerca/annuncio', [AnnouncementController::class, 'searchAnnouncement'])->name('searchAnn');
Route::post('/lingua/{lang}',[FrontController::class,'setLanguage'])->name('set_language_locale');

//Rotta segnalazione annunci

Route::get('/report/{announcement}', [AnnouncementController::class, 'reportAnnouncement'])->name('reportAnnouncement');

//Rotta pagine in costruzione

Route::get('onBuild', [PublicController::class,'onBuild'])->name('onBuild');
