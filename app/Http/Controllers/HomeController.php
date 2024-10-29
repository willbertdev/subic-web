<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendar()
    {
        return view('theme/calendar');
    }
    
    public function chatMessage()
    {
        return view('theme/chatMessage');
    }
    
    public function chatEmpty()
    {
        return view('theme/chatEmpty');
    }
    
    public function veiwDetails()
    {
        return view('theme/veiwDetails');
    }

    public function email()
    {
        return view('theme/email');
    }

    public function error1()
    {
        return view('theme/error');
    }

    public function faq()
    {
        return view('theme/faq');
    }

    public function gallery()
    {
        return view('theme/gallery');
    }

    public function kanban()
    {
        return view('theme/kanban');
    }

    public function pricing()
    {
        return view('theme/pricing');
    }

    public function termsCondition()
    {
        return view('theme/termsCondition');
    }

    public function widgets()
    {
        return view('theme/widgets');
    }
    public function chatProfile()
    {
        return view('theme/chatProfile');
    }

}
