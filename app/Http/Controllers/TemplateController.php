<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;




class TemplateController extends Controller
{
    public function templates()
    {
        $generatedFiles = User::withCount(['templates' => function($query) {
            $query->where('user_id', auth()->id);
        }])->get();
        $template = Template::query()->get();
        return view("templates", compact('generatedFiles', 'template'));
    }

    public function templatesForm(){
        return view("templatesForm");
    }

    public function generate(Request $request)
    {
       
        $validated = $request->validate([
          'HeaderTitle'=>'required|string',
            'BodyTitle'=>'required|string',
            'bgColor'=>'required|string',
            'BodyDescription'=>'required|string',
            'SeconDescription'=>'required|string',
            'image'=>'required|string'
        ]);

        $htmlRecord = Template::create([
            'HeaderTitle' => $validated['HeaderTitle'],
            'BodyTitle'=> $validated['BodyTitle'],
            'BodyDescription' => $validated['BodyDescription'],
            'bgColor'=>$validated['bgColor'] ?? '#ffffff',
            'SeconDescription'=>$validated['SeconDescription'],
            'image'=>$validated['image']
        ]);

    
     
        $user = Auth::user();

        
     
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <title>'.($htmlRecord->HeaderTitle).'</title>
        </head>
        <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html,body{
            height: auto;
            width: auto;
        }
        
        .inform span{
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 1px '.($htmlRecord->bgColor).';
        }
        
        .inform h1{
            padding-right: 35px;
            justify-content: center;
        }
        
        .inform{
            justify-content: center;
            padding-top: 50px;
            padding-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .inform img{
            width: 500px;
            height: auto;
        }
        
        .image{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }
        
        nav{
            background-color: '.($htmlRecord->bgColor).';
            color: #fff;
        }
        nav h2{
            padding: 5px;
            padding-left: 10px;
            color: white;
        }
        
        .main{
            margin-left: auto;
            margin-right: auto;
            padding-top: 15px;
        }
        
        .doing{
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 50px;
        }
        </style>
        <body>
            <nav class="navbar">
                <h2 class="navbar-brand mb-0">'.($htmlRecord->BodyTitle).'</h2>
            </nav>
        
            <header class="container-fluid main">
                <div class="container">
                  <div class="row">
                    <h1 class="text-center col-12">Welcome To My Website!</h1>
                  </div>
                </div>
            </header>
        
            <div class="container-fluid inform">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 asd">
                      <h1>My name is <span>'.($htmlRecord->BodyTitle).'</span></h1>
                      <p>'.($htmlRecord->BodyDescription).'.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 image">
                      <img class="rounded " src="'.($htmlRecord->image).'">
                    </div>
                  </div>
                </div>
            </div>
        
            <div class="container-fluid text-center doing">
                <h1 class="col-12">What am i doing?</h1>
                <p class="col-12">'.($htmlRecord->SeconDescription).'.</p>
            </div>
        
            <footer class="py-3">
                <ul class="nav justify-content-center pb-3 mb-3">
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">'.($user->username).'</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">'.($user->email).'</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
              </footer>
        </body>
        </html>';

   
        $filename = 'newTemplate' . '.html';
        Storage::disk('public')->put($filename, $html);


        $fileUrl = asset('storage/' . $filename);
       
        return back()->with([
            'success' => 'HTML file generated successfully!',
            'download_link' => $fileUrl,
            'filename' => $filename,
        ]);
        
        
    }
    public function listTemplates()
{
    $templates = Template::orderBy('created_at', 'desc')->get();

    return view('templates', compact('templates'));
}
    

}