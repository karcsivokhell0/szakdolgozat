<?php

namespace App\Http\Controllers;

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
    public function templates()
    {
        $generatedFiles = session('generated_files', []);
        return view("templates", compact('generatedFiles'));
    }

    public function templatesForm(){
        
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

    public function generate(Request $request){

        $user = Auth::user();

        $validate = $request->validate([
            'htitle'=>'required|string|max:255',
            'btitle'=>'required|string|max255',
            'description'=>'required|string|max:1000',
            'bg_color'=>'required|string|size:7'
        ]);

        $htmlContent = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>{$validate['htitle']}</title>
                <style>
                    body {
                        background-color: {$validate['bg_color']}; 
                    }
                </style>
            </head>
            <body>
                <h1>{$validate['btitle']}</h1>
                <p>{$validate['description']}</p>
            </body>
            </html>
        ";

        $filename=Auth::user()->username .'html';

        Storage::disk('Documents')->put($filename, $htmlContent);

        $user->filegenerate->sodium_increment;


        $generatedFiles = session('generated_files',[]);
        $generatedFiles[] = $filename;
        session(['generatedd_files' => $generatedFiles]);

        return redirect()->route('templates')->with('success','You made your html file succesly');
    }
}