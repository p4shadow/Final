<?php

namespace App\Http\Controllers;

use App\Models\Automotor;
use Illuminate\Http\Request;
use App\Models\Titular;

class AutomotorController extends Controller
{
    public function index()
    {
        $automotores = Automotor::latest()->paginate(10);
        return view('automotores.index', compact('automotores'));
    }

    public function create()
    {
    $titulares = Titular::all();
    return view('automotores.create', compact('titulares'));

    }

    public function edit($id)
    {
        $automotor = Automotor::findOrFail($id);
        return view('automotores.edit', compact('automotor'));
    }

    public function store(Request $request)
    {
       $automotor = Automotor::create($request->all());
      
        return redirect()->route('automotores.show', $automotor->id);
        
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required',
            'tipo' => 'required',
            'titular_id' => 'required',
        ]);

        Automotor::create($request->all());

        return redirect()->route('automotores.index')->with('success', 'Automotor creado exitosamente');
    }

    public function show($id)
    {
        $automotor = Automotor::findOrFail($id);
        return view('automotores.show', compact('automotor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required',
            'tipo' => 'required',
            'titular_id' => 'required',
        ]);

        $automotor = Automotor::findOrFail($id);
        $automotor->update($request->all());

        return redirect()->route('automotores.index')->with('success', 'Automotor actualizado exitosamente');
    }
}
