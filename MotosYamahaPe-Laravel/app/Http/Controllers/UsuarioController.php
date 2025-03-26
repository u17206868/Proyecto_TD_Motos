<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|min:8',
            'tipo_usuario' => 'required|in:cliente,admin',
            'celular' => 'nullable|max:20',
        ]);

        $usuario = Usuario::create($validatedData);
        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'correo' => 'required|email|unique:usuarios,correo,' . $id,
            'contraseña' => 'required|min:8',
            'tipo_usuario' => 'required|in:cliente,admin',
            'celular' => 'nullable|max:20',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($validatedData);
        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
