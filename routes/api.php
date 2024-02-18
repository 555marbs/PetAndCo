<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\HomeController;
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

/* Log in
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* Post */
Route::resource('post', PostController::class);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout', [UserAuthController::class, 'logout']);
    Route::get('/loggeduser', [UserAuthController::class, 'logged_user']);
    Route::post('/changepassword', [UserAuthController::class, 'change_password']);
});



Route::prefix('api')->group(function () {
    Route::post('/login', [UserAuthController::class, 'login']);
    Route::post('/admin/login', [AdminAuthController::class, 'apiLogin']);
    // Protected routes
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});
