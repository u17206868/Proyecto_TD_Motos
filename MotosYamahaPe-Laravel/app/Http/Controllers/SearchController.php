<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function redirectSearch(Request $request)
    {
        $tipo = $request->input('tipo', 'autos'); // Valor por defecto: 'autos'
        $params = $request->only([
            'q',
            'marca',
            'modelo',
            'año',
            'precio',
            'kilometraje',
            'transmision',
            'tipo',
            'combustible'
        ]);

        if ($tipo === 'autos') {
            return redirect()->route('autos.index', $params);
        }

        if ($tipo === 'motos') {
            return redirect()->route('motos.index', $params);
        }

        return redirect()->route('home')->with('error', 'Tipo de búsqueda no válido.');
    }
}
