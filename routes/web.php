<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store']);


Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::put('/posts/{post}', [App\Http\Controllers\PostController::class, 'update']);

Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy']);

