<?php


use App\Http\Controllers\Dashboard\MainController as DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::prefix('dashboard')->group(function () {
    Route::get('', DashboardController::class)->name('dashboard');

    Route::get('profile', [ProfileController::class, 'index'])->name('settings');
    Route::put('profile', [ProfileController::class, 'update'])->name('settings.update');

    require __DIR__.'/auth.php';
});
