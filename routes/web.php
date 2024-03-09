<?php

use App\Http\Controllers\AdoptionApplicationController;
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

/* Static Pages Route */
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
/* End of Static Pages Route */


Route::get('/adoption_post',[DashboardController::class,'adoption_create'])->name('adoption_create');



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

Route::post('/adoption_post', [AdoptionController::class, 'store'])->name('adoptions.store');

// Route to show the adoption application form
Route::get('/adoptions/{adoption}/apply', [AdoptionApplicationController::class, 'showApplicationForm'])->name('adoption.application.form');

// Route to submit the adoption application
Route::post('/adoptions/{adoption}/apply', [AdoptionApplicationController::class, 'submitApplication'])->name('adoption.application.submit');

// Routes for the pet owner to accept or reject applications
Route::post('/applications/{application}/accept', [AdoptionApplicationController::class, 'acceptApplication'])->name('adoption.application.accept');
Route::post('/applications/{application}/reject', [AdoptionApplicationController::class, 'rejectApplication'])->name('adoption.application.reject');

// Route for the pet owner to view received applications
Route::get('/my-adoptions/{adoption}/applications', [AdoptionController::class, 'viewApplications'])->name('adoption.applications');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
