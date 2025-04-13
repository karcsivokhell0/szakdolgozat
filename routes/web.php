<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\TemplateController;
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
        FacadesAuth::logout();  
        return redirect('/home');  
    })->name('logout');
});


Route::group([
    "controller"=>TemplateController::class
],function(){
   
    Route::get("/templatesForm", "templatesForm")->name('templatesForm');
    Route::post("/generate", "generate")->name('generate');
    Route::get('/templates', [TemplateController::class, 'listTemplates'])->name('listTemplates');
});

Route::group([
    "controller"=>BaseController::class
],function(){
    Route::get("/loggedIn", "loggedIn")->name("loggedIn");
    Route::get("/admin", "admin")->name("admin");
});