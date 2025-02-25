<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use Illuminate\Auth\Events\Login;
use Illuminate\Container\Attributes\Auth;

Route::get('/home', [BaseController::class, "home"]);
Route::get('/about', [BaseController::class, "about"]);

Route::get('/login', [BaseController::class, "login"]);

Route::get('/register',[BaseController::class,"register"]);

Route::group([
    "prefix"=>"templates",
    "controller"=>BaseController::class
], function(){
    Route::get("/", "templates");
}
)->middleware('auth');