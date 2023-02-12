<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class ProgramasController extends Controller
{
    public function index()
    {
        $Programas = Programas::all();
        return view('Programas.index', compact('Programas'));
    }
   
}
