<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendices_has_Horario;

class Aprendices_has_HorariosController extends Controller
{
    //GET
    public function index()
    {
        $Aprendices_has_Horarios = Aprendices_has_Horario::all();
        return view('Aprendices_has_Horarios.index', compact('Aprendices_has_Horarios'));
    }

    // GET
    public function create()
    {
        $products = product::all();
        return view('Aprendices_has_Horarios.create', compact('products'));
    }
    public function show($id)
    {
        $Aprendices_has_Horario = Aprendices_has_Horario::find($id);
        return view('Aprendices_has_Horarios.show', compact('Aprendices_has_Horario'));
    }
    public function store(Request $request)
    {
        $Aprendices_has_Horario = Aprendices_has_Horario::create([  'product_id'=> $request->product_id,
                                'amount'=> $request->amount,
                                'payment_method'=> $request->payment_method,
                                'date_time_payment'=> $request->date_time_payment,
                                'sale_id'=> $request->sale_id,
                                'shopping_id'=> $request->shopping_id
                             ]);
        return redirect()->route('Aprendices_has_Horarios.index')->with('success','Se ha creado correctamente.');
    }


    public function edit($id)
    {
        $Aprendices_has_Horario = Aprendices_has_Horarios::find($id);
        return view('Aprendices_has_Horarios.edit', compact('Aprendices_has_Horario'));
    }
    public function update(Request $request, $id)
    {
        $Aprendices_has_Horario = Aprendices_has_Horario::find($id)->update($request->all());
        return redirect()->route('Aprendices_has_Horarios.index');
    }
    public function destroy($id)
    {
        $Aprendices_has_Horario = Aprendices_has_Horario::find($id)->delete();
        return redirect()->route('Aprendices_has_Horarios.index');
    }
}
