<?php

use App\Http\Controllers\Dashboard\MainController as DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::prefix('dashboard')->group(function () {
    require __DIR__ . '/auth.php';

    Route::middleware('auth')->group(function () {
        Route::get('', DashboardController::class)->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name(
            'settings'
        );
        Route::put('profile', [ProfileController::class, 'update'])->name(
            'settings.update'
        );

        Route::controller(Dashboard\Feedback\MainController::class)
            ->prefix('feedback')
            ->group(function () {
                Route::get('', 'index')->name('dashboard.feedback.list');
                Route::get('{feedback}', 'show')->name(
                    'dashboard.feedback.show'
                );
                Route::delete('{feedback}', 'destroy')->name(
                    'dashboard.feedback.destroy'
                );
            });

        Route::controller(Dashboard\Feedback\ResponseFeedbackController::class)
            ->prefix('feedback/{feedback}/response')
            ->group(function () {
                Route::post('/store', 'store')->name(
                    'dashboard.feedback.response.store'
                );
                Route::delete('/destroy', 'destroy')->name(
                    'dashboard.feedback.response.destroy'
                );
            });
    });
});
