<?php

use App\Http\Controllers\Category\Controllers\CategoriesController;
use App\Http\Controllers\Epic\Controllers\EpicsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Project\Controllers\ProjectsController;
use App\Http\Controllers\Setting\Controllers\SettingsController;
use App\Http\Controllers\Task\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/project', ProjectsController::class);

    Route::resource('/task', TasksController::class);

    Route::resource('/epic', EpicsController::class);

    Route::resource('/setting', SettingsController::class)->only('index');

    Route::resource('/category', CategoriesController::class);
});

require __DIR__.'/auth.php';
