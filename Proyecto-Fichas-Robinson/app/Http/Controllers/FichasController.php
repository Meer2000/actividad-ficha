<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\User;
use App\Models\Trimestre;
use App\Models\Tipo_programa;
use App\Models\Programa;
use Auth;

class FichasController extends Controller
{
    public function index()
    {
        $Fichas = Ficha::delEstudiante(auth()->User()->id)->get();
        return view('Fichas.index', compact('Fichas'));
    }

    public function create()
    {
        $Fichas = Ficha::all();
        return view('Fichas.create', compact('Fichas'));
    }

    public function show($id)
    {
        $Ficha = Ficha::find($id);
        return view('Fichas.show', compact('Ficha'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $Ficha = Ficha::create(['id' => $request->id,
            'nombre' => $request->nombre,
            'User_id' => $request->user_id,
            'Trimestre_id' => $request->trimestre_id,
            'Programas_Id' => $request->Programas_id,
            'Tipo_Programa_Id' => $request->Tipo_Programa_id,
            'users_id' => $user->id,
        ]);
        return redirect()->route('Fichas.index')->with('success', 'Se ha creado correctamente.');
    }

    public function edit($id)
    {
        $Ficha = Ficha::find($id);
        return view('Fichas.edit', compact('Ficha',));
    }

    public function update(Request $request, $id)
    {
        $Ficha = Ficha::find($id)->update($request->all());
        return redirect()->route('Fichas.index');
    }

    public function destroy($id)
    {
        $Ficha = Ficha::find($id)->delete();
        return redirect()->route('Fichas.index');
    }


}
