<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/news');
Route::get('/home', fn() => redirect()->route('news.index'))->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('news', NewsController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

});

require __DIR__.'/auth.php';
