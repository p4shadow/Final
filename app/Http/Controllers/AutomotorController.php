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
    //    return view('automotores.create');
    $titulares = Titular::all();
    return view('automotores.create', compact('titulares'));

    }

   //  public function store(Request $request)
   // {
   //     $automotor = Automotor::create($request->all());
        // Puedes redirigir a la vista de detalles o a la lista de automotores
   //     return redirect()->route('automotores.show', $automotor->id);
   // }

    public function store(Request $request)
    {
        $titulares = Titular::all();
        return view('automotores.create', compact('titulares'));

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'patente' => 'required',
            'tipo' => 'required',
            'titular_id' => 'required',
        ]);

        $automotor = Automotor::create($request->all());
    // Puedes redirigir a la vista de detalles o a la lista de automotores
    return redirect()->route('automotores.show', $automotor->id);

        Automotor::create($request->all());

        return redirect()->route('automotores.index')->with('success', 'Automotor creado exitosamente');
    }

    public function show($id)
    {
        $titular = Automotor::findOrFail($id);
        return view('automotores.show', compact('automotor'));
    }
}
