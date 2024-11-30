<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'show']);
Route::post('/users',[UserController::class,'store']);
