<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ContactUsController;


Route::get('/', [LandingController::class, 'land']);
Route::get('/facilities', [FacilitiesController::class, 'wow']);
Route::get('/research', [ResearchController::class, 'restab']);
Route::get('/contactus', [ContactUsController::class, 'contacttab']);

