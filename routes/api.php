<?php

use App\Http\Controllers\API\AouthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('project',ProjectController::class)->middleware('auth:sanctum');
Route::apiResource('task',TaskController::class)->middleware('auth:sanctum');
Route::post('/register',[AouthController::class ,'register']); 
Route::post('/login',[AouthController::class ,'login']); 
Route::post('/logout',[AouthController::class ,'logout'])->middleware('auth:sanctum'); 

 
 