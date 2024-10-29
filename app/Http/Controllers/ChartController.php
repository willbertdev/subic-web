<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function columnChart()
    {
        return view('theme/chart/columnChart');
    }
    
    public function lineChart()
    {
        return view('theme/chart/lineChart');
    }

    public function pieChart()
    {
        return view('theme/chart/pieChart');
    }
}
