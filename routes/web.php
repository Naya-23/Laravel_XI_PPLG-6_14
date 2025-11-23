<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LandingController;

Route::get('/',[LandingController::class, 'index'])->name('landing');

