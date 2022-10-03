<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\Api\GetPostController;
use App\Http\Controllers\Api\GetUserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('get/category', [ForumController::class, 'getCategory']);
Route::get('get/post/', [GetPostController::class, 'getAllPostHomeForum']);
Route::get('get/users/', [GetUserController::class, 'getUserViaAPi']);
