<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\User;
use App\Models\Trimestre;
use App\Models\Tipo_programa;
use App\Models\Programa;

class FichasController extends Controller
{
    public function index()
    {
       $Fichas = Ficha::all();
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
        $Ficha = Ficha::create([  'id'=> $request->id,
                                'nombre'=> $request->nombre,
                                'Users_Id'=> $request->Users_Id,
                                'trimestre_idtrimestre'=> $request->trimestre_idtrimestre,
                                'TIPO_PROGRAMA_Id'=> $request->TIPO_PROGRAMA_Id,
                                'Programas_Id'=> $request->Programas_Id,
                             ]);
        return redirect()->route('Fichas.index')->with('success','Se ha creado correctamente.');
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
