<?php


use App\Http\Controllers\Dashboard\MainController as DashboardController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::prefix('dashboard')->group(function () {
    require __DIR__.'/auth.php';

    Route::middleware('auth')->group(function () {
        Route::get('', DashboardController::class)->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('settings');
        Route::put('profile', [ProfileController::class, 'update'])->name('settings.update');

        Route::resource('pages', PageController::class);
        Route::resource('sections', SectionController::class);
    });

});
