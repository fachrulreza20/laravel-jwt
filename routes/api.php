<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('project', [ProjectController::class, 'project']);

Route::get('projectall', [ProjectController::class, 'projectAuth'])->middleware('jwt.verify');
Route::get('user', [UserController::class, 'getAuthenticatedUser'])->middleware('jwt.verify');

Route::get('post', [PostController::class, 'post']);
Route::get('postall', [PostController::class, 'postAuth'])->middleware('jwt.verify');
