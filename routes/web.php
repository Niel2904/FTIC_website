<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilitiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faci', [FacilitiesController::class, 'wow']);
