<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    public function index()
    {
        $Horarios = Horarios::all();
        return view('Horarios.index', compact('Horarios'));
    }
    public function create()
    {
        $Horarios = Horario::all();
        return view('Horarios.create', compact('Horarios'));
    }
    public function show($id)
    {
        $Horario = Horario::find($id);
        return view('Horarios.show', compact('Horarios'));
    }
    public function store(Request $request)
    {
        $Horario = Horario::create([  'id'=> $request->id,
                                'entrada'=> $request->entrada,
                                'salida'=> $request->salida
                             ]);
        return redirect()->route('Horarios.index')->with('success','Se ha creado correctamente.');
    }
    public function edit($id)
    {
        $Horario = Horarios::find($id);
        return view('Horarios.edit', compact('Horarios'));
    }
    public function update(Request $request, $id)
    {
        $Horario = Horario::find($id)->update($request->all());
        return redirect()->route('Horarios.index');
    }
    public function destroy($id)
    {
        $Horario = Horario::find($id)->delete();
        return redirect()->route('Horarios.index');
    }
}
