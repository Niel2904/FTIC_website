<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\LandingController;


Route::get('/', [LandingController::class, 'land']);
Route::get('/faci', [FacilitiesController::class, 'wow']);

