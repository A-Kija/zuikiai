<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController as A;

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


// Route::get('/animals', ['App\Http\Controllers\AnimalController', 'index']);

Route::get('/animals', [A::class, 'animals']);

Route::get('/animals/racoon/{color?}', [A::class, 'racoon']);
