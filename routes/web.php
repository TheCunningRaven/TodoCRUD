<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/**
 * TODOs routes
 */
Route::get('todos', [Controllers\TodosController::class, 'index']);
Route::get('todos/{todo}', [Controllers\TodosController::class, 'show']);
Route::get('new-todo', [Controllers\TodosController::class, 'create']);

Route::post('store-todo', [Controllers\TodosController::class, 'store']);
Route::get('todos/{todo}/edit', [Controllers\TodosController::class, 'edit']);
Route::post('todos/{todo}/update-todos', [Controllers\TodosController::class, 'update']);
Route::get('todos/{todo}/destroy', [Controllers\TodosController::class, 'destroy']);
