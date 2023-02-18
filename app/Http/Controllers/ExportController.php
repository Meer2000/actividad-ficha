<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AprendicesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function export(){
return Excel::download(new AprendicesExport,'Aprendices.xlsx');

    }
}
