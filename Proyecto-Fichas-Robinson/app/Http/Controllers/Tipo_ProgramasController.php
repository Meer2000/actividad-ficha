<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_Programa;

class Tipo_ProgramasController extends Controller
{
    public function index()
    {
        $Tipo_Programas = Tipo_Programas::all();
        return view('Tipo_Programas.index', compact('Tipo_Programas'));
    }
}