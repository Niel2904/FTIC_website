<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResearchController;


Route::get('/', [LandingController::class, 'land']);
Route::get('/facilities', [FacilitiesController::class, 'wow']);
Route::get('/research', [ResearchController::class, 'restab']);

