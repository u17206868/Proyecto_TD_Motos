<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroReclamacionesController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'nullable|string|max:15',
            'tipo' => 'required|string|in:Reclamo,Consulta',
            'detalle' => 'required|string',
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('libro.reclamaciones')->with('success', 'Tu reclamación ha sido registrada correctamente.');
    }
}
