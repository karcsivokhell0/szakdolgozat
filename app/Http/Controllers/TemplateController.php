<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class TemplateController extends Controller
{
    public function templates()
    {
        $generatedFiles = session('generated_files', []);
        return view("templates", compact('generatedFiles'));
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
                    
                    </style>
                </head>
                <body>
                <h1>' .($htmlRecord->BodyTitle) . '</h1>
            <div class="description">' .($htmlRecord->description) . '</div>
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
}
