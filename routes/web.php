<?php

use App\Http\Controllers\FrontendController\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "index"]);
Route::get('/contact/{id}', [UserController::class, "contact"]);
Route::get('/about', [UserController::class, "about"]);
Route::get('/courses', [UserController::class, "courses"]);
Route::get('/skills', [UserController::class, "skills"]);
Route::get('/footer', [UserController::class, "footer"]);