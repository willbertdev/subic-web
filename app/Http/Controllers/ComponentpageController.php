<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentpageController extends Controller
{
    public function alert()
    {
        return view('theme/componentspage/alert');
    }
    
    public function avatar()
    {
        return view('theme/componentspage/avatar');
    }
    
    public function badges()
    {
        return view('theme/componentspage/badges');
    }
    
    public function button()
    {
        return view('theme/componentspage/button');
    }
    
    public function calendar()
    {
        return view('theme/calendar');
    }
    
    public function card()
    {
        return view('theme/componentspage/card');
    }
    
    public function carousel()
    {
        return view('theme/componentspage/carousel');
    }
    
    public function colors()
    {
        return view('theme/componentspage/colors');
    }
    
    public function dropdown()
    {
        return view('theme/componentspage/dropdown');
    }
    
    public function imageUpload()
    {
        return view('theme/componentspage/imageUpload');
    }
    
    public function list()
    {
        return view('theme/componentspage/list');
    }
    
    public function pagination()
    {
        return view('theme/componentspage/pagination');
    }
    
    public function progress()
    {
        return view('theme/componentspage/progress');
    }
    
    public function radio()
    {
        return view('theme/componentspage/radio');
    }
    
    public function starRating()
    {
        return view('theme/componentspage/starRating');
    }
    
    public function switch()
    {
        return view('theme/componentspage/switch');
    }
    
    public function tabs()
    {
        return view('theme/componentspage/tabs');
    }
    
    public function tags()
    {
        return view('theme/componentspage/tags');
    }
    
    public function tooltip()
    {
        return view('theme/componentspage/tooltip');
    }
    
    public function typography()
    {
        return view('theme/componentspage/typography');
    }
    
    public function videos()
    {
        return view('theme/componentspage/videos');
    }
    
}
