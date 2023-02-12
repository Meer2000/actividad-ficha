<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trimestre;

class TrimestresController extends Controller
{
    public function index()
    {
        $Trimestres = Trimestres::all();
        return view('Trimestres.index', compact('Trimestres'));
    }
}