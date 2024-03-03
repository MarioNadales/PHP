<?php

namespace App\Http\Controllers;

use App\Http\Resources\EtiquetaResource;
use App\Http\Resources\TareaResource;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $etiquetas = Etiqueta::all();
        return EtiquetaResource::collection($etiquetas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = $request->nombre;
        $etiqueta->save();

        return new EtiquetaResource($etiqueta);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etiqueta = Etiqueta::find($id);
    
        return new EtiquetaResource($etiqueta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etiqueta = Etiqueta::find($id);
        $etiqueta->nombre = $request->nombre;
        $etiqueta->save();

        return new EtiquetaResource($etiqueta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return new EtiquetaResource($etiqueta);
    }
}
