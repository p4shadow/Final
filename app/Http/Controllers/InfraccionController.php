<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraccion;
use App\Models\Automotor;


class InfraccionController extends Controller
{
    public function index()
    {
        $infracciones = Infraccion::latest()->paginate(10);
        return view('infracciones.index', compact('infracciones'));
    }

    public function create()
    {
        $autos = Automotor::all();
        return view('infracciones.create', compact('autos'));
    }

    public function edit($id)
    {
        $infracciones = Infraccion::findOrFail($id);
        return view('infracciones.edit', compact('infracciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'auto_id' => 'required|numeric',
            'tipo' => 'required',
        ]);

        $infraccion = Infraccion::create($request->all());

        return redirect()->route('infracciones.show', $infraccion->id);

        Infraccion::create($request->all());

        return redirect()->route('infracciones.index')->with('success', 'Infracción creada correctamente.');
    }

    public function show($id)
    {
        $infraccion = Infraccion::findOrFail($id);
        return view('infracciones.show', compact('infraccion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'auto_id' => 'required|numeric',
            'tipo' => 'required',
        ]);

        $infraccion = Infraccion::findOrFail($id);
        $infraccion->update($request->all());

        return redirect()->route('infracciones.index')->with('success', 'Infracción actualizado exitosamente');
    }
}

