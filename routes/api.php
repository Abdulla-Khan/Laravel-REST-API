<?php

use App\Http\Controllers\Api\TodoApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("view",[TodoApiController::class,"index"]);
Route::post("add",[TodoApiController::class,"addData"]);
Route::get("view/{id}",[TodoApiController::class,"show"]);
Route::get("{id}/edit",[TodoApiController::class,"show"]);
Route::put("{id}/edit",[TodoApiController::class,"update"]);
Route::delete("{id}/delete",[TodoApiController::class,"delete"]);




