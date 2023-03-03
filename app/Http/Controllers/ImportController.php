<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\AprendicesImport;
use Maatwebsite\Excel\Facades\Excel;
class ImportController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel:: import(new AprendicesImport, $file);
        return back();
    }
}
