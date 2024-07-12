<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CustomFooter;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\QualityEducController;
use App\Http\Controllers\ThesissdgController;



Route::get('/', [LandingController::class, 'land']);
Route::get('/facilities', [FacilitiesController::class, 'faciltab']);
Route::get('/research', [ResearchController::class, 'restab']);
Route::get('/qesdg4', [QualityEducController::class, 'qesdg4']);
Route::get('/gallery', [GalleryController::class, 'gallerytab']);
Route::get('/contactus', [ContactUsController::class, 'contacttab']);
Route::get('/programs', [ProgramController::class, 'programtab']);
Route::get('/footer', [CustomFooter::class, 'footer']);
Route::get('/aboutus', [AboutUsController::class, 'aboutustab']);
Route::get('/ressdg', [ThesissdgController::class, 'ressdgtab']);


