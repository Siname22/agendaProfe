<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() // Display a listing of the resource.
    {
        $categorias = Categoria::orderBy('nombre')->get();
        return view('categorias_index', compact('categorias'));
    }

    public function create() // Show the form for creating a new resource.
    {
        return view('categorias_create');
    }

    public function store(Request $request) // Store a newly created resource in storage.
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function show(Categoria $categoria) // Display the specified resource.
    {
        return view('categorias_show', compact('categoria'));
    }

    public function edit(Categoria $categoria) // Show the form for editing the specified resource.
    {
        return view('categorias_edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria) // Update the specified resource in storage.
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria) // Remove the specified resource from storage.
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
