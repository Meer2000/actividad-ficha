<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;
use App\Models\Aprendiz;
//use Illuminate\Support\Facades\Auth;
use Auth;

class AprendicesController extends Controller
{
    public function index()
    {
       // $Aprendices = Aprendiz::all(); se  coloca comentario en este line
        //return view('Aprendices.index', compact('Aprendices'));
       $Aprendices = Aprendiz::delEstudiante(auth()->User()->id)->get();
        return view('Aprendices.index', compact('Aprendices'));

    }

    public function create()
    {
        $Fichas = Ficha::all();
        $Aprendices = Aprendiz::all();
        return view('Aprendices.create', compact('Aprendices','Fichas'));
    }

    public function show($id)
    {
        $Ficha =Ficha::find($id);
        $Aprendiz = Aprendiz::find($id);
        return view('Aprendices.show', compact('Aprendiz','Ficha'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();


        $Aprendiz = Aprendiz::create(['id' => $request->id,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'fecha' => $request->fecha,
            'documento' => $request->documento,
           'users_id' => $user -> id,
            'Fichas_id' => $request ->Fichas_id,//esto es prueba
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
