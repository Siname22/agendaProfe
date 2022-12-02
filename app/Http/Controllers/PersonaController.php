<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Categoria;

class PersonaController extends Controller
{
    public function index() // Display a listing of the resource.
    {
        $personas = Persona::orderBy('nombre')->get();
        return view('personas_index', compact('personas'));
    }

    public function create() // Show the form for creating a new resource.
    {
        return view('personas_create');
    }

    public function store(Request $request) // Store a newly created resource in storage.
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required',
        ]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        //$categoria = Categoria::find($request->categoria_id);
        //$persona->categoria()->associate($categoria);

        return redirect()->route('personas.index');
    }

    public function show(Persona $persona) // Display the specified resource.
    {
        return view('personas_show', compact('persona'));
    }

    public function edit(Persona $persona) // Show the form for editing the specified resource.
    {
        return view('personas_edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona) // Update the specified resource in storage.
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required',
        ]);

        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        return redirect()->route('personas.index');
    }

    public function destroy(Persona $persona) // Remove the specified resource from storage.
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
