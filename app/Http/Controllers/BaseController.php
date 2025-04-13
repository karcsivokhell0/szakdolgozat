<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function loggedIn(){
        return view("loggedIn");
    }

    public function admin(){
        return view("admin");
    }
}
