<?php

namespace App\Http\Controllers\Admin\ExportImport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        return view('admin.import.index');
    }
}
