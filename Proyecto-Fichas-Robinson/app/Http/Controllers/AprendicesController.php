<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
class AprendicesController extends Controller
{
    public function index()
    {
        $Aprendices = Aprendiz::all();
        return view('Aprendices.index', compact('Aprendices'));
    }

    public function create()
    {
        $Aprendices = Aprendiz::all();
        return view('Aprendices.create', compact('Aprendices'));
    }

    public function show($id)
    {
        $Aprendiz = Aprendiz::find($id);
        return view('Aprendices.show', compact('Aprendiz'));
    }

    public function store(Request $request)
    {
        $Aprendiz = Aprendiz::create(['id' => $request->id,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'fecha' => $request->fecha,
            'documento' => $request->documento,


        ]);
        return redirect()->route('Aprendices.index')->with('success', 'Se ha creado correctamente.');
    }

    public function edit($id)
    {
        $Aprendiz = Aprendiz::find($id);
        return view('Aprendices.edit', compact('Aprendiz'));
    }

    public function update(Request $request, $id)
    {
        $Aprendiz = Aprendiz::find($id)->update($request->all());
        return redirect()->route('Aprendices.index');
    }

    public function destroy($id)
    {
        $Aprendiz = Aprendiz::find($id)->delete();
        return redirect()->route('Aprendices.index');
    }
}
