<?php

use App\Http\Controllers\AdoptionController;
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
Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/', [DashboardController::class, 'landing'])->name('landing');
Route::get('/category', [DashboardController::class, 'category'])->name('categories');
Route::get('/dogpetcare', [DashboardController::class, 'dogpetcare'])->name('dogpetcare');
Route::get('/dogbreed',[DashboardController::class, 'dogbreed'])->name('dogbreed');
Route::get('/dogroom',[DashboardController::class,'dogroom'])->name('dogroom');
Route::get('/catpetcare',[DashboardController::class, 'catpetcare'])->name('catpetcare');
Route::get('/catbreed', [DashboardController::class, 'catbreed'])->name('catbreed');
Route::get('/catgroom',[DashboardController::class, 'catgroom'])->name('catgroom');
Route::get('/birdpetcare',[DashboardController::class, 'birdpetcare'])->name('birdpetcare');
Route::get('/birdbreed',[DashboardController::class, 'birdbreed'])->name('birdbreed');
Route::get('/birdgroom',[DashboardController::class,'birdgroom'])->name('birdgroom');
Route::get('fishpet',[DashboardController::class, 'fishpet'])->name('fishpet');
Route::get('fishkind',[DashboardController::class,'fishkind'])->name('fishkind');
Route::get('fishstyle',[DashboardController::class,'fishstyle'])->name('fishstyle');
Route::get('fishpage',[DashboardController::class,'fishpage'])->name('fishpage');
Route::get('adoptionpost',[DashboardController::class,'adoptionpost'])->name('adoptionpost');


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

Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/guides', [PostController::class, 'index'])->name('dashboard.guides');

Route::get('/adoptions', [AdoptionController::class, 'index'])->name('dashboard.adoption');

<<<<<<< HEAD
=======
Route::get('/adopt/{id}', [AdoptionController::class, 'adopt'])->name('dashboard.adoptions');



>>>>>>> b8776db17f41f36759634acfe748377a97b29c8c
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
