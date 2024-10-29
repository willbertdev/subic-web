<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiapplicationController extends Controller
{
    public function codeGenerator()
    {
        return view('theme/aiapplication/codeGenerator');
    }

    public function codeGeneratorNew()
    {
        return view('theme/aiapplication/codeGeneratorNew');
    }
    
    public function imageGenerator()
    {
        return view('theme/aiapplication/imageGenerator');
    }

    public function textGenerator()
    {
        return view('theme/aiapplication/textGenerator');
    }

    public function textGeneratorNew()
    {
        return view('theme/aiapplication/textGeneratorNew');
    }

    public function videoGenerator()
    {
        return view('theme/aiapplication/videoGenerator');
    }

    public function voiceGenerator()
    {
        return view('theme/aiapplication/voiceGenerator');
    }

}
