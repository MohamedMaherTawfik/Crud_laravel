<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewUserController;

Route::get('/',[NewUserController::class,'index']);

Route::get('/create',[NewUserController::class,'create'])->name('create');
Route::post('/create/store',[NewUserController::class,'store'])->name('store');

Route::get('/user/{id}',[NewUserController::class,'edit'])->name('edit');
Route::patch('/user/{id}/edit',[NewUserController::class,'update'])->name('update');

Route::get('/user/{id}/delete',[NewUserController::class,'delete'])->name('delete');
