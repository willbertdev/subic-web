<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableBasic()
    {
        return view('theme/table/tableBasic');
    }
    
    public function tableData()
    {
        return view('theme/table/tableData');
    }
    
}
