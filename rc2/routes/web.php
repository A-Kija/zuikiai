<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SquareController as S;
use App\Http\Controllers\SocialController;

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

Route::get('/hello', [S::class, 'hello'])->name('hello');

Route::prefix('social')->group(function () {
    Route::get('/', [SocialController::class, 'index'])->name('social-index');
    Route::get('/list', [SocialController::class, 'list'])->name('social-list');
    Route::post('/', [SocialController::class, 'store'])->name('social-store');
    Route::get('/{social}', [SocialController::class, 'show'])->name('social-show');
    Route::get('/{social}/edit', [SocialController::class, 'edit'])->name('social-edit');
    Route::put('/{social}', [SocialController::class, 'update'])->name('social-update');
    Route::delete('/{social}', [SocialController::class, 'destroy'])->name('social-destroy');
});



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
