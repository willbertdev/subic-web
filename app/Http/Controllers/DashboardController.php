<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('theme/welcome');
    }
    
    public function index1()
    {
        return view('theme/dashboard/index');
    }
    
    public function index2()
    {
        return view('theme/dashboard/index2');
    }
    
    public function index3()
    {
        return view('theme/dashboard/index3');
    }
    
    public function index4()
    {
        return view('theme/dashboard/index4');
    }
    
    public function index5()
    {
        return view('theme/dashboard/index5');
    }
    
    public function wallet()
    {
        return view('theme/dashboard/wallet');
    }
    
}
