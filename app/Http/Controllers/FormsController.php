<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function formLayout()
    {
        return view('theme/forms/formLayout');
    }
    
    public function formValidation()
    {
        return view('theme/forms/formValidation');
    }
    
    public function form()
    {
        return view('theme/forms/form');
    }
    
    public function wizard()
    {
        return view('theme/forms/wizard');
    }
    
}
