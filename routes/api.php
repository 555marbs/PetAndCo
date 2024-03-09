<?php


use App\Http\Controllers\api\AdoptionApplicationController;
use App\Http\Controllers\Api\AdoptionController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/* Guides */
Route::resource('post', PostController::class);
Route::get('posts', [PostController::class, 'get']);
Route::post('posts', [PostController::class, 'store']);
Route::put('posts', [PostController::class, 'update']);
Route::delete('posts', [PostController::class, 'destroy']);


/* User */
Route::get('/user', [UserAuthController::class,'user']);
Route::post('/register', [UserAuthController::class,'add']);
Route::put('/update/{id}', [UserAuthController::class,'update']);
Route::delete('/user/{id}', [UserAuthController::class,'delete']);

/* User Authentication */
Route::post('/login', [UserAuthController::class, 'login']);
Route::post('/logout', [UserAuthController::class, 'logout'])->middleware('auth:sanctum');



// Post Adoption
Route::get('/adoptions', [AdoptionController::class, 'get']);
Route::post('/adoptions', [AdoptionController::class, 'store'])->middleware('auth:sanctum');
Route::get('/adoptions/{id}', [AdoptionController::class, 'show']);
Route::put('/adoptions/{id}', [AdoptionController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/adoptions/{id}', [AdoptionController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/adoptions/{adoptionId}/applications', [AdoptionController::class, 'viewApplications'])->middleware('auth:sanctum');

// Show application form data
Route::get('/adoptions/{adoptionId}/application', [AdoptionApplicationController::class, 'showApplicationForm'])->name('adoptions.application.show');

// Submit an application
Route::post('/adoptions/{adoptionId}/apply', [AdoptionApplicationController::class, 'submitApplication'])->name('adoptions.application.submit');

// Accept an application
Route::post('/applications/{applicationId}/accept', [AdoptionApplicationController::class, 'acceptApplication'])->name('applications.accept');

// Reject (delete) an application
Route::delete('/applications/{applicationId}', [AdoptionApplicationController::class, 'rejectApplication'])->name('applications.reject');

