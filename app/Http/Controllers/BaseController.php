<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function home()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }
    public function templates()
    {
        return view("templates");
    }
    public function login()
    {
        return view("login");
    }
}
