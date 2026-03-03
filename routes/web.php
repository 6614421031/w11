<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;

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
    Route::middleware('auth')->group(function () {

    Route::get('/trees', [TreeController::class, 'index'])
        ->name('trees.index');

    Route::get('/trees/create', [TreeController::class, 'create'])
        ->name('trees.create');

    Route::post('/trees', [TreeController::class, 'store'])
        ->name('trees.store');

    Route::get('/trees/{tree}', [TreeController::class, 'show'])
        ->name('trees.show');

    Route::get('/trees/{tree}/edit', [TreeController::class, 'edit'])
        ->name('trees.edit');

    Route::put('/trees/{tree}', [TreeController::class, 'update'])
        ->name('trees.update');

    Route::delete('/trees/{tree}', [TreeController::class, 'destroy'])
        ->name('trees.destroy');
});
});


require __DIR__.'/auth.php';
