<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;

class PerfilController extends Controller
{
    public function index()
    {
        // Obtener la información del usuario desde la base de datos
        $usuario = Usuario::find(Session::get('usuario_id'));
        $data = [
            'renderBody' => view('Perfil.index')->render(),
        ];

        // Retornar la vista de perfil con el layout de header y footer
        return view('Shared/_Layout', $data);
    }

    public function edit()
    {
        $usuario = Usuario::find(Session::get('usuario_id'));
        return view('Perfil.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'celular' => 'nullable|string|max:15',
        ]);

        $usuario = Usuario::find(Session::get('usuario_id'));
        $usuario->nombre = $request->input('nombre');
        $usuario->correo = $request->input('correo');
        $usuario->celular = $request->input('celular');
        $usuario->save();

        // Actualizar la sesión
        Session::put('usuario_nombre', $usuario->nombre);
        Session::put('usuario_email', $usuario->correo);

        return redirect()->route('perfil')->with('success', 'Perfil actualizado correctamente.');
    }
}
