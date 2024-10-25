<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

Route::get('/', [BaseController::class, "welcome"]);
Route::get('/home', [BaseController::class, "home"]);