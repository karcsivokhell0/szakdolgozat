<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {

        return view("login");
    }

    public function register()
    {
        return view("register");
    }

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



    public function store(Request $request) {
        $request->validate([
            'username' => 'required|string|max:250',
            'name' => 'required|string|max:250',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);
    
        $user = User::create([
            'username'=>$request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        
        
        
        return redirect()->route("login");

    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('username','name','email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('templates')
            ->withSuccess('You have successfully logged in!');
    }
}