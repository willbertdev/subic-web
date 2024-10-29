<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function company()
    {
        return view('theme/settings/company');
    }
    
    public function currencies()
    {
        return view('theme/settings/currencies');
    }
    
    public function language()
    {
        return view('theme/settings/language');
    }
    
    public function notification()
    {
        return view('theme/settings/notification');
    }
    
    public function notificationAlert()
    {
        return view('theme/settings/notificationAlert');
    }
    
    public function paymentGateway()
    {
        return view('theme/settings/paymentGateway');
    }
    
    public function theme()
    {
        return view('theme/settings/theme');
    }
    
}
