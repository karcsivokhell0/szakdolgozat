<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;


Route::get('/home', [BaseController::class, "home"]);
Route::get('/about', [BaseController::class, "about"]);
Route::get('/templates', [BaseController::class, "templates"]);
Route::get('/login', [BaseController::class, "login"]);
Route::get('/Profile',[BaseController::class,"UserProfile"]);