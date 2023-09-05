<?php

use App\Http\Livewire\Page\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;

// Route::get('/', Home::class)->name('home');
Route::get('/', [LandingpageController::class, 'index'])->name('home');
Route::get('/portfolio', [LandingpageController::class, 'portfolio'])->name('portfolio');