<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/public/post', [App\Http\Controllers\Api\StoreController::class, 'getAll']);
Route::get('/public/post/{id}', [App\Http\Controllers\Api\StoreController::class, 'getSingle']);
Route::get('/public/post/limit/{limit}', [App\Http\Controllers\Api\StoreController::class, 'getLimit']);
Route::get('/public/post/limit/{limit}/{sort}', [App\Http\Controllers\Api\StoreController::class, 'getLimitSort']);
Route::post('/public/post', [App\Http\Controllers\Api\StoreController::class, 'addProduct']);
