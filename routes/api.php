<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//STUDENT
//GET
Route::get('/students', [StudentController::class, 'index']);
//POST
Route::post('/students', [StudentController::class, 'register']);
//GET (SPECIFIC)
Route::get('/students/{id}', [StudentController::class, 'find']);
//PATCH
Route::patch('/students/{id}', [StudentController::class, 'update']);