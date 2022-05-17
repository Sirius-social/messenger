<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Web\LocalizationController::class, 'store']);
Route::get('change-locale/{locale}', [
    Web\LocalizationController::class,
    'update'
])->name('web.change.locale');

Route::prefix('{locale}')->group(function () {
    Route::get('/', [Web\IndexController::class, 'index'])->name('web.home');

    Route::get('invitation', [Web\InvitationController::class, 'index'])->name(
        'web.invitation'
    );

    Route::post('feedback', [Web\FeedbackController::class, 'store'])->name(
        'web.feedback.store'
    );
});

require __DIR__ . '/dashboard.php';
