<?php

namespace App\Http\Controllers;


use App\Http\Resources\ProductoResource;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::all();
        //return response()->json($productos, 200);
        return ProductoResource::collection($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = $request->categoria;
        $param= $request->all();
        unset($param['categoria']);
        $producto = producto::create($param);
        $producto->categoria()->attach($categorias);

        return response()->json($producto, 201);
        
        // $producto = producto::create($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productos = producto::find($id);
        //return response()->json($productos, 200);
        return new ProductoResource($productos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria()->attach($request->categoria);
        $producto->save();

    return new ProductoResource($producto);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        
        $producto->delete();
        return response()->json(null, 204);
    }
}
