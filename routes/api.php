<?php

use App\Http\Controllers\Api\AdoptionApplicationApiController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\api\AdoptionApplicationController;
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

/* Adoption */
Route::resource('adoptions', AdoptionController::class);
Route::get('adoption', [AdoptionController::class, 'get']);
Route::post('adoption', [AdoptionController::class, 'store']);
Route::put('adoption', [AdoptionController::class, 'update']);
Route::delete('adoption', [AdoptionController::class, 'destroy']);

Route::post('/adopt/{id}', [AdoptionController::class, 'adopt']);


/* Login */
Route::prefix('api')->group(function () {
    Route::post('/login', [UserAuthController::class, 'login']);
    Route::post('/logout', [UserAuthController::class, 'logout']);
});

/* User */
Route::get('user', [UserController::class, 'user']);
Route::post('user', [UserController::class, 'add']);
Route::put('user', [UserController::class, 'update']);
Route::delete('user/{id}', [UserController::class, 'delete']);
Route::post('/login', [UserController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/change_password', [UserController::class, 'change_password']);
});

// Post Adoption
Route::get('/adoptions', [AdoptionController::class, 'get']);
Route::post('/adoptions', [AdoptionController::class, 'store'])->name('adoptions.store');
Route::get('/adoptions/{id}', [AdoptionController::class, 'show']);
Route::put('/adoptions/{id}', [AdoptionController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/adoptions/{id}', [AdoptionController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/adoptions/{adoptionId}/applications', [AdoptionController::class, 'viewApplications'])->middleware('auth:sanctum');

// Show application form data
Route::get('/adoptions/{adoptionId}/application', [AdoptionApplicationApiController::class, 'showApplicationForm'])->name('adoptions.application.show');

// Submit an application
Route::post('/adoptions/{adoptionId}/apply', [AdoptionApplicationApiController::class, 'submitApplication'])->name('adoptions.application.submit');

// Accept an application
Route::post('/applications/{applicationId}/accept', [AdoptionApplicationApiController::class, 'acceptApplication'])->name('applications.accept');

// Reject (delete) an application
Route::delete('/applications/{applicationId}', [AdoptionApplicationApiController::class, 'rejectApplication'])->name('applications.reject');

