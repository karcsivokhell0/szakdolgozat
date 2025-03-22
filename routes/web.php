<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

Route::group([
    "controller" => UserController::class
], function(){
    Route::post('/store', 'store')->name('store');
    Route::get('/login', "login")->name("login");
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/register',"register")->name('register');
    Route::get('/home',  "home")->name('home');
    Route::get('/about',  "about")->name('about');
    Route::get("/templates", "templates")->name('templates');
    Route::post('/logout', function () {
        FacadesAuth::logout();  // Logs out the user
        return redirect('/home');  // Redirects to the homepage or login page
    })->name('logout');
});