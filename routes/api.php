<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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
Route::resource('adoption', AdoptionController::class);
Route::get('adoption', [AdoptionController::class, 'get']);
Route::post('adoption', [AdoptionController::class, 'store']);
Route::put('adoption', [AdoptionController::class, 'update']);
Route::delete('adoption', [AdoptionController::class, 'destroy']);


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

