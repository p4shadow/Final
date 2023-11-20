<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titular;

class TitularController extends Controller
{
    public function index()
    {
        $titulares = Titular::all();
        return view('titulares.index', compact('titulares'));
    }

    public function create()
    {
        return view('titulares.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'domicilio' => 'required',
        ]);

        Titular::create($request->all());

        return redirect()->route('titulares.index')->with('success', 'Titular creado exitosamente');
    }

    public function edit($id)
    {
        $titular = Titular::findOrFail($id);
        return view('titulares.edit', compact('titular'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'domicilio' => 'required',
        ]);

        $titular = Titular::findOrFail($id);
        $titular->update($request->all());

        return redirect()->route('titulares.index')->with('success', 'Titular actualizado exitosamente');
    }

    public function show($id)
    {
        $titular = Titular::findOrFail($id);
        return view('titulares.show', compact('titular'));
    }
}
