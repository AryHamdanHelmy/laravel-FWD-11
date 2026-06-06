<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LatihanController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sapa', [LatihanController::class, 'index'])->name('sapa');
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
// Route::get('/profile/about', [ProfileController::class, 'about'])->name('profile.about');
// Route::get('/profile/portfolio', [ProfileController::class, 'portfolio'])->name('profile.portfolio');

Route::get('/halo/{name}', function ($name){
    return 'hallo, dibimbing'.$name;
});
