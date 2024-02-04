<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('landing.landing');
});

Route::get('/guides', function () {
    return view('dashboard.guides');
})->name('guides');

Route::get('/categories', function () {
    return view('dashboard.categories');
})->name('categories');

Route::get('/dog', function () {
    return view('classification.dog');
})->name('dog');

Route::get('/cat', function () {
    return view('classification.cat');
})->name('cat');

Route::get('/bird', function () {
    return view('classification.bird');
})->name('bird');

Route::get('/fish', function () {
    return view('classification.fish');
})->name('fish');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
