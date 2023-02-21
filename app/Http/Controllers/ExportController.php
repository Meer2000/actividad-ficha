<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Exports\AprendicesExport;
Use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('export');
    }

    public function export()
    {
        return Excel::download (new AprendicesExport, 'Aprendices.xlsx');


    }
}
