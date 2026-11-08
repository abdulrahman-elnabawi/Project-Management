<?php

use App\Http\Controllers\API\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',[TestController::class,'index']);


