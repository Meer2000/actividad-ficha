<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\Fichas;
use App\Models\Users;
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
        return view('Aprendices.show', compact('Aprendices'));
    }
    public function store(Request $request)
    {
        $Aprendiz = Aprendiz::create([  'id'=> $request->id,
                                'entrada'=> $request->entrada,
                                'salida'=> $request->salida
                             ]);
        return redirect()->route('Aprendices.index')->with('success','Se ha creado correctamente.');
    }
    public function edit($id)
    {
        $Aprendiz = Aprendices::find($id);
        return view('Aprendices.edit', compact('Aprendices'));
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
