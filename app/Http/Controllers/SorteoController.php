<?php

namespace App\Http\Controllers;

use App\Models\Sorteo;
use Illuminate\Http\Request;

class SorteoController extends Controller
{
    
    public function index()
    {
        //retorna la vista principal de sorteo
    }

    
    public function create()
    {
        //retorna la vista para crear un nuevo sorteo
        
    }

    
    public function store(Request $request)
    {
        //Funcion para almacenar un nuevo sorteo
        request()->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'estado' => 'required|boolean',
        ]);
        $sorteo = new Sorteo();
        $sorteo->sorteo_nombre = $request->sorteo_nombre;
        $sorteo->sorteo_fecha_inicio = $request->sorteo_fecha_inicio;
        $sorteo->sorteo_fecha_fin= $request->sorteo_fecha_fin;
        $sorteo->created_at = $request->now();
        $sorteo->updated_at = $request->now();
        $sorteo->save();
    }


   
    public function edit(Sorteo $sorteo)
    {
        //retorna la vista para editar un sorteo
        return view('sorteo.edit', compact('sorteo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sorteo $sorteo)
    {
        //Funcion para actualizar un sorteo
        $sorteo->sorteo_nombre = $request->sorteo_nombre;
        $sorteo->sorteo_fecha_inicio = $request->sorteo_fecha_inicio;
        $sorteo->sorteo_fecha_fin= $request->sorteo_fecha_fin;
        
        $sorteo->updated_at = $request->now();
        $sorteo->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sorteo $sorteo)
    {
        //funcikon para eliminar un sorteo
    }
}
