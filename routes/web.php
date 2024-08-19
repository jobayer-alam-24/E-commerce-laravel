<?php

use App\Http\Controllers\FrontendController\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "index"]);
Route::get('/product_details', [UserController::class, "details"]);
Route::get('/product_checkout', [UserController::class, "checkout"]);
Route::get('/category', [UserController::class, "category"]);
Route::get('/privacy_policy', [UserController::class, "policy"]);
Route::get('/return_process', [UserController::class, "returnProcess"]);
Route::get('/shop', [UserController::class, "shop"]);
Route::get('/sub_category', [UserController::class, 'subcategory']);
Route::get('/thank_user', [UserController::class, "thank"]);
Route::get('/product_type', [UserController::class, "productType"]);
Route::get('/view_products', [UserController::class, "viewProducts"]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
