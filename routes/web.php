<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/approach', [PageController::class, 'approach'])->name('approach');
Route::get('/activities', [PageController::class, 'activities'])->name('activities');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/pilots', [PageController::class, 'pilotsIndex'])->name('pilots.index');
Route::get('/pilots/{slug}', [PageController::class, 'pilotShow'])->name('pilots.show');
Route::get('/maps', [PageController::class, 'gisMaps'])->name('maps');
Route::get('/updates', [PageController::class, 'updates'])->name('updates');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
