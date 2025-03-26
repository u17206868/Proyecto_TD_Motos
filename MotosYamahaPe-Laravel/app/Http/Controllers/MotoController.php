<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function index(Request $request)
    {
        // Crear la consulta base para la tabla de motos
        $query = Moto::query();

        // Búsqueda global por marca o modelo
        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('marca', 'like', "%{$request->q}%")
                    ->orWhere('modelo', 'like', "%{$request->q}%");
            });
        }

        // Filtrar por marca
        if ($request->filled('marca')) {
            $query->where('marca', 'like', "%{$request->marca}%");
        }

        // Filtrar por modelo
        if ($request->filled('modelo')) {
            $query->where('modelo', 'like', "%{$request->modelo}%");
        }

        // Filtrar por rango de años
        if ($request->filled('año_desde')) {
            $query->where('año', '>=', $request->año_desde);
        }

        if ($request->filled('año_hasta')) {
            $query->where('año', '<=', $request->año_hasta);
        }

        // Filtrar por precio máximo
        if ($request->filled('precio')) {
            $query->where('precio', '<=', $request->precio);
        }

        // Filtrar por combustible (nuevo filtro)
        if ($request->filled('combustible')) {
            $query->where('combustible', 'like', "%{$request->combustible}%");
        }

        // Obtener los datos filtrados con paginación
        $motos = $query->paginate(10);

        // Obtener valores únicos para los filtros
        $marcas = Moto::select('marca')->distinct()->get();
        $modelos = Moto::select('modelo')->distinct()->get();
        $combustibles = Moto::select('combustible')->distinct()->get();

        // Retornar la vista con el diseño compartido
        return view('Shared._Layout', [
            'renderBody' => view('Motos.Index', compact('motos', 'marcas', 'modelos', 'combustibles'))->render()
        ]);
    }

    public function show($id)
    {
        // Buscar la moto por su ID
        $moto = Moto::find($id);

        // Si no se encuentra la moto, devolver un error 404
        if (!$moto) {
            return response()->json(['error' => 'Moto no encontrada'], 404);
        }

        // Retornar los detalles de la moto en formato JSON
        return response()->json($moto);
    }
}
