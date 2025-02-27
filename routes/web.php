<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Container\Attributes\Auth;

Route::get('/home', [BaseController::class, "home"]);
Route::get('/about', [BaseController::class, "about"]);


Route::group([
    "prefix"=>"templates",
    "controller"=>BaseController::class
], function(){
    Route::get("/", "templates");
}
)->middleware(Auth::class);

Route::controller(UserController::class)->group(function(){
    Route::post('/store', 'store')->name('store');
    Route::get('/login', "login");
    Route::get('/register',"register");
});