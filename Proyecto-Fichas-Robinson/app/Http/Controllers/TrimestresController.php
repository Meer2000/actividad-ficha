<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trimestres;

class TrimestresController extends Controller
{
    public function index()
    {
        $Trimestres = Trimestres::all();
        return view('Trimestres.index', compact('Trimestres'));
    }
    public function create()
    {
        $Trimestres = Trimestre::all();
        return view('Trimestres.create', compact('Trimestres'));
    }
    public function show($id)
    {
        $Trimestre = Trimestre::find($id);
        return view('Trimestres.show', compact('Trimestres'));
    }
    public function store(Request $request)
    {
        $Trimestre = Trimestre::create([  'idtrimestre'=> $request->idtrimestre,
                                'nombre'=> $request->nombre    
                             ]);
        return redirect()->route('Trimestres.index')->with('success','Se ha creado correctamente.');
    }
    public function edit($id)
    {
        $Trimestre = Trimestres::find($id);
        return view('Trimestres.edit', compact('Trimestres'));
    }
    public function update(Request $request, $id)
    {
        $Trimestre = Trimestre::find($id)->update($request->all());
        return redirect()->route('Trimestres.index');
    }
    public function destroy($id)
    {
        $Trimestre = Trimestre::find($id)->delete();
        return redirect()->route('Trimestres.index');
    }
}