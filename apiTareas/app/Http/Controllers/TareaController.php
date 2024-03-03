<?php

namespace App\Http\Controllers;

use App\Http\Resources\TareaResource;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $tareas = Tarea::all();
        //return response()->json($productos, 200);
        //return new TareaResource($tareas);
        return response()->json($tareas, 200);
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
        $param= $request->all();
        $tarea = Tarea::create($param);

        return response()->json($tarea, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
        //return response()->json($productos, 200);
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
    
    }
}

/* 
Auth Controller
public function login(Request $request) {
    $user = User::where('email', $request->email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json(['message' => "Hola $user->name", 'acces_token' => $token, 'token_type' => 'Bearer'], 200);

}
public function register(Request $request) {
    $param = $request->all();
    $user = User::create([
        'name' => $param['name'],
        'email' => $param['email'],
        'password' => Hash::make($param['password']),
    ]);
    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json(['data' => $user], `acces_token`->$token
    `token_type`=>Bearer);

}
public function logout(Request $request) {
    auth()->user()->tokens()->delete();
    return [
        'message' => 'Session cerrada'
    ];
}

*/