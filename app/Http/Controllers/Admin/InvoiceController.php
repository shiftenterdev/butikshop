<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.sales.invoice.index');
    }
}
