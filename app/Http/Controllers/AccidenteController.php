<?php

namespace App\Http\Controllers;

use App\Models\Accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    public function index()
    {
        $accidentes = Accidente::all();
        return view('accidentes.index', compact('accidentes'));
    }

    public function create()
    {
    return view('accidentes.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'hora' => 'required',
        'codigo' => 'required',
        'fecha' => 'required',
        'lugar' => 'required',
    ]);

    Accidente::create($request->all());

    return redirect()->route('accidentes.index')
                         ->with('success', 'Accidente creado exitosamente.');
    }

    public function show($id)
    {
    $accidente = Accidente::find($id);
    return view('accidentes.show', compact('accidente'));
    }


    public function edit($id)
    {
    $accidente = Accidente::find($id);
    return view('accidentes.edit', compact('accidente'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'hora' => 'required',
        'codigo' => 'required',
        'fecha' => 'required',
        'lugar' => 'required',
    ]);

    $accidente = Accidente::find($id);
    $accidente->update($request->all());

    return redirect()->route('accidentes.index')
                     ->with('success', 'Accidente actualizado exitosamente.');
    }


    public function destroy($id)
    {
    $accidente = Accidente::find($id);
    $accidente->delete();

    return redirect()->route('accidentes.index')
                     ->with('success', 'Accidente eliminado exitosamente.');
    }

}

