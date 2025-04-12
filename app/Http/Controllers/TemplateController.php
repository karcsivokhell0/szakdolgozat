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
            'description'=>'required|string'
        ]);

        $htmlRecord = Template::create([
            'HeaderTitle' => $validated['HeaderTitle'],
            'BodyTitle'=> $validated['BodyTitle'],
            'description' => $validated['description'],
            'bgColor'=>$validated['bgColor'] ?? '#ffffff'
        ]);

    
     
        $user = Auth::user();

        
     
        $html = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>' .($htmlRecord->HeaderTitle).'</title>
    
                    <style>
                    body{
                    background-color: '.($htmlRecord->bgColor).'
                    }

                    footer{
                    background-color: grey;
                    }
                    
                    </style>
                </head>
                <body>
                <h1>' .($htmlRecord->BodyTitle) . '</h1>
                <div class="description">' .($htmlRecord->description) . '</div>
                <footer>
                <ul>
                <li>'. ($user->username).'</li>
                <li>'. ($user->email).'</li>
                </ul>
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