<?php

use App\Core\Http\Controllers\ProfileController;
use App\Web\Project\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Projects
    Route::resource('/project', ProjectsController::class);
});

require __DIR__.'/auth.php';
