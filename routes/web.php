<?php

use App\Http\Controllers\FrontendController\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "index"]);