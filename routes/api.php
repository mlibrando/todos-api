<?php

use App\Models\Todos;
use App\Http\Controllers\TodosApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/todos', [TodosApiController::class, 'index']);

Route::post('/todos', [TodosApiController::class, 'store']);

Route::patch('/todos/{todo}', [TodosApiController::class, 'update']);

Route::delete('/todos/{todo}', [TodosApiController::class, 'destroy']);




