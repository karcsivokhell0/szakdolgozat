<?php

namespace App\Http\Controllers;

use App\Models\Form_item;
use App\Models\Template;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
    

    public function templatesForm(){
        return view("templatesForm");
    }



    public function store(Request $request) {
        $request->validate([
            'username' => 'required|string|max:250',
            'name' => 'required|string|max:250',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            
        ]);
    
        $user = User::create([
            'username'=>$request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'templates_id'=>$request->templates_id
        ]);
        
        
        
        return redirect()->route("login");

    }


    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('loggedIn')
            ->withSuccess('You have successfully logged in!');
    }

    public function contactUs(){
        return view('contact');
    }

    public function errors(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'type' => 'required|string',
            'error'=> 'required|string|max:250'
        ]);
        $exception=Form_item::create([
            "email"=>$request->email,
            'type'=>$request->type,
            'error'=>$request->error
        ]);
        return back()->with([
            "success"=>"Thank you for your message. We will work on the problem"
        ]);
    }
    public function list()
    {
        $users = User::all();
        $form_items = Form_item::all();
        return view('dashboard', compact(['users','form_items']));
    
    }
}