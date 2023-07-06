<?php

use App\Web\Project\Controllers\ProjectsController;
use App\Web\Setting\Controllers\SettingsController;
use App\Web\Task\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect('/task');
});

Route::namespace('\App\Web\Task\Controllers')->group(function () {
    Route::resource('/task', TaskController::class);

    Route::get('/task/create/{id}', [TaskController::class, 'create'])->name('task.create');
});

Route::namespace('\App\Web\Project\Controllers')->group(function () {
    Route::resource('/project', ProjectsController::class);
});

Route::namespace('\App\Web\Setting\Controllers')->group(function () {
    Route::get('/setting', [SettingsController::class, 'index'])->name('setting.index');
});
