<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\nameController;

Route::get('/', [LandingController::class, 'land']);
Route::get('/facilities', [FacilitiesController::class, 'faciltab']);
Route::get('/research', [ResearchController::class, 'restab']);
Route::get('/gallery', [GalleryController::class, 'gallerytab']);

