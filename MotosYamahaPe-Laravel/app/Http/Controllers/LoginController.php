<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Login.index')->render(),
        ];

        return view('Shared/_Layout', $data);
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        // Buscar al usuario por correo
        $usuario = Usuario::where('email', $request->input('correo'))->first();

        if (!$usuario || !Hash::check($request->input('contraseña'), $usuario->password)) {
            return redirect()->back()->withErrors(['correo' => 'Credenciales inválidas.'])->withInput();
        }

        // Almacenar datos en la sesión
        Session::put('usuario_id', $usuario->id);
        Session::put('usuario_nombre', $usuario->name);
        Session::put('usuario_email', $usuario->email);
        Session::put('usuario_tipo', $usuario->tipo_usuario);

        return redirect()->route('home')->with('success', '¡Inicio de sesión exitoso!');
    }

    public function logout()
    {
        Session::flush(); // Elimina toda la sesión
        return redirect()->route('login')->with('success', '¡Sesión cerrada correctamente!');
    }
}
