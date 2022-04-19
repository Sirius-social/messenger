<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Web\IndexController::class, 'index'])->name('web.home');
Route::get('features', [\App\Http\Controllers\Web\FeaturesController::class, 'index'])->name('web.features');
Route::get('downloads', [\App\Http\Controllers\Web\DownloadsController::class, 'index'])->name('web.downloads');
Route::get('invitation', [\App\Http\Controllers\Web\InvitationController::class, 'index'])->name('web.invitation');

require __DIR__.'/dashboard.php';
