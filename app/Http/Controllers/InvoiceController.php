<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceAdd()
    {
        return view('theme/invoice/invoiceAdd');
    }
    
    public function invoiceEdit()
    {
        return view('theme/invoice/invoiceEdit');
    }
    
    public function invoiceList()
    {
        return view('theme/invoice/invoiceList');
    }
    
    public function invoicePreview()
    {
        return view('theme/invoice/invoicePreview');
    }
    
}
