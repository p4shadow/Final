<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraccion;

class InfraccionController extends Controller
{
    public function index()
    {
        $infracciones = Infraccion::all();
        return view('infracciones.index', compact('infracciones'));
    }

    public function create()
    {
        return view('infracciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'descripcion' => 'required',
            'auto_id' => 'required|numeric',
            'tipo' => 'required',
        ]);

        Infraccion::create($request->all());

        return redirect()->route('infracciones.index')->with('success', 'Infracción creada correctamente.');
    }
}
