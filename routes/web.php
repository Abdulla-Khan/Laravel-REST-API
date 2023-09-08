<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class,"getTodo"]);
Route::get('/add', [TodoController::class,"addItem"]);
Route::get('/delete/{id}', [TodoController::class,"deleteItem"]);
Route::get('/edit/{id}', [TodoController::class,"editItem"]);
Route::get('/update', [TodoController::class,"updateItem"]);




