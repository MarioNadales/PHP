<?php

namespace App\Http\Controllers;


use App\Http\Resources\TareaResource;
use App\Models\Tarea;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $tareas = Tarea::all();
        return TareaResource::collection($tareas);
        

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
        $etiqueta = $request->etiqueta;
        $param= $request->all();
        unset($param['Etiqueta']);
        $tareas = Tarea::create($param);
        $tareas->etiqueta()->attach($etiqueta);

        $tareas = Tarea::with('etiqueta')->get();
        return TareaResource::collection($tareas);

        // return response()->json($tareas, 201);
        // return new TareaResource($tareas);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
    
        return new TareaResource($tarea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->save();
        return new TareaResource($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        
        $tarea->delete();
        return new TareaResource($tarea);
    }
}
