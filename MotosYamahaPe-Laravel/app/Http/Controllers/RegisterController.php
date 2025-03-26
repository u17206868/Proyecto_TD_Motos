<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Register/Index')
        ];

        return view('Shared/_Layout', $data);
    }
   

    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'correo' => 'required|email|unique:usuarios,correo',
        'contraseña' => 'required|min:8|confirmed',
        'celular' => 'nullable|max:20',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $usuario = Usuario::create([
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'contraseña' => Hash::make($request->input('contraseña')),
            'tipo_usuario' => 'cliente',
            'celular' => $request->input('celular'),
        ]);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Hubo un problema al registrar el usuario. Inténtalo nuevamente.')->withInput();
    }

    return redirect()->route('login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
}


}
