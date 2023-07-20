<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController as An;
use App\Http\Controllers\CalculatorController as C;
use App\Http\Controllers\ColorController as R;
use App\Http\Controllers\AuthorController as A;
use App\Http\Controllers\TagController as T;

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

Route::get('/animals', [An::class, 'animals']);

Route::get('/animals/racoon/{color?}', [An::class, 'racoon']);

Route::get('/calculator', [C::class, 'showCalculator'])->name('calculator');
Route::post('/calculator', [C::class, 'doCalculator'])->name('do-calculator');


Route::prefix('colors')->name('colors-')->group(function () {

    Route::get('/', [R::class, 'index'])->name('index'); // GET /colors from URL:  colors Name: colors-index
    Route::get('/create', [R::class, 'create'])->name('create'); // GET /colors/create from URL:  colors/create Name: colors-create
    Route::post('/', [R::class, 'store'])->name('store'); // POST /colors from URL:  colors Name: colors-store
    Route::get('/delete/{color}', [R::class, 'delete'])->name('delete'); // GET /colors/delete/{color} from URL:  colors/delete/{color} Name: colors-delete
    Route::delete('/{color}', [R::class, 'destroy'])->name('destroy'); // DELETE /colors/{color} from URL:  colors/{color} Name: colors-destroy 
    Route::get('/edit/{color}', [R::class, 'edit'])->name('edit'); // GET /colors/edit/{color} from URL:  colors/edit/{color} Name: colors-edit
    Route::put('/{color}', [R::class, 'update'])->name('update'); // PUT /colors/{color} from URL:  colors/{color} Name: colors-update

});

Route::prefix('authors')->name('authors-')->group(function () {

    Route::get('/', [A::class, 'index'])->middleware(['roles:U|M|A'])->name('index');
    Route::get('/create', [A::class, 'create'])->middleware(['roles:A'])->name('create');
    Route::post('/', [A::class, 'store'])->middleware(['roles:A'])->name('store');
    Route::get('/delete/{author}', [A::class, 'delete'])->middleware(['roles:A'])->name('delete');
    Route::delete('/{author}', [A::class, 'destroy'])->middleware(['roles:A'])->name('destroy');
    Route::get('/edit/{author}', [A::class, 'edit'])->middleware(['roles:A'])->name('edit');
    Route::put('/{author}', [A::class, 'update'])->middleware(['roles:A'])->name('update');

    Route::post('/tags/{author}', [A::class, 'addTag'])->middleware(['roles:M|A'])->name('add-tag');
    Route::delete('/tags/{author}/{tag}', [A::class, 'removeTag'])->middleware(['roles:M|A'])->name('remove-tag');
    Route::post('/tags/create/{author}', [A::class, 'createTag'])->middleware(['roles:M|A'])->name('create-tag');

});

Route::prefix('tags')->name('tags-')->group(function () {

    Route::get('/', [T::class, 'index'])->name('index');
    Route::get('/list', [T::class, 'list'])->name('list');
    Route::get('/count', [T::class, 'count'])->name('count');
    Route::get('/delete/{tag}', [T::class, 'delete'])->name('delete');


    Route::get('/create', [T::class, 'create'])->name('create');
    Route::post('/', [T::class, 'store'])->name('store');
    
    Route::delete('/{tag}', [T::class, 'destroy'])->name('destroy');
    Route::get('/edit/{tag}', [T::class, 'edit'])->name('edit');
    Route::put('/{tag}', [T::class, 'update'])->name('update');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
