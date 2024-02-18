<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/', [DashboardController::class, 'landing'])->name('landing');


Route::get('/categories', function () {
    return view('dashboard.categories');
})->name('categories');

Route::get('/adoption', function () {
    return view('dashboard.adoption');
})->name('adoption');

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


Route::get('/guides', [PostController::class, 'index'])->name('dashboard.guides');

Route::get('/adoption', [AdoptionController::class, 'index'])->name('dashboard.adoption');

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'apiLogin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
