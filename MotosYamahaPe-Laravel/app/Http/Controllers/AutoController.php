<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use app\models\imagen;

class AutoController extends Controller
{
    /**
     * muestra todos los autos (nuevos y usados).
     */
    public function index(Request $request)
    {
        $query = Auto::with('imagenes'); // incluye la relación con imágenes

        // aplicar filtros globales
        if ($request->filled('q')) {
            $query->where(function ($query) use ($request) {
                $query->where('marca', 'like', "%{$request->q}%")
                    ->orWhere('modelo', 'like', "%{$request->q}%")
                    ->orWhere('tipo', 'like', "%{$request->q}%");
            });
        }

        if ($request->filled('marca')) {
            $query->where('marca', 'like', "%{$request->marca}%");
        }

        if ($request->filled('modelo')) {
            $query->where('modelo', 'like', "%{$request->modelo}%");
        }

        if ($request->filled('año_desde')) {
            $query->where('año', '>=', $request->año_desde);
        }

        if ($request->filled('año_hasta')) {
            $query->where('año', '<=', $request->año_hasta);
        }

        if ($request->filled('precio')) {
            $query->where('precio', '<=', $request->precio);
        }

        if ($request->filled('kilometraje')) {
            $query->where('kilometraje', '<=', $request->kilometraje);
        }

        $autos = $query->paginate(10);

        // Datos adicionales para los filtros
        $marcas = Auto::select('marca')->distinct()->get();
        $modelos = Auto::select('modelo')->distinct()->get();

        return view('Shared._Layout', [
            'renderBody' => view('Autos.Index', compact('autos', 'marcas', 'modelos'))->render()
        ]);
    }

    /**
     * Muestra solo autos NUEVOS.
     */
    public function indexNuevos(Request $request)
    {
        $query = Auto::with('imagenes')->where('estado', 'Nuevo');

        // Aplicar filtros específicos
        if ($request->filled('marca')) {
            $query->where('marca', 'like', "%{$request->marca}%");
        }

        if ($request->filled('modelo')) {
            $query->where('modelo', 'like', "%{$request->modelo}%");
        }

        if ($request->filled('año_desde')) {
            $query->where('año', '>=', $request->año_desde);
        }

        if ($request->filled('año_hasta')) {
            $query->where('año', '<=', $request->año_hasta);
        }

        if ($request->filled('precio')) {
            $query->where('precio', '<=', $request->precio);
        }

        // Autos nuevos tienen kilometraje 0, pero dejamos la opción por si acaso
        if ($request->filled('kilometraje')) {
            $query->where('kilometraje', '<=', $request->kilometraje);
        }

        $autos = $query->paginate(10);

        // Datos adicionales para los filtros
        $marcas = Auto::select('marca')->distinct()->get();
        $modelos = Auto::select('modelo')->distinct()->get();

        return view('Shared._Layout', [
            'renderBody' => view('Autos.Index_nuevos', compact('autos', 'marcas', 'modelos'))->render()
        ]);
    }

    /**
     * Muestra solo autos USADOS.
     */
    public function indexUsados(Request $request)
    {
        $query = Auto::with('imagenes')->where('estado', 'Usado');

        // Aplicar filtros específicos
        if ($request->filled('marca')) {
            $query->where('marca', 'like', "%{$request->marca}%");
        }

        if ($request->filled('modelo')) {
            $query->where('modelo', 'like', "%{$request->modelo}%");
        }

        if ($request->filled('año')) {
            $rangoAño = explode('-', $request->año);
            if (count($rangoAño) == 2) {
                $query->whereBetween('año', [$rangoAño[0], $rangoAño[1]]);
            } elseif ($request->año == '1999-') {
                $query->where('año', '<=', 1999);
            }
        }

        if ($request->filled('precio')) {
            if ($request->precio == '35000+') {
                $query->where('precio', '>=', 35000);
            } else {
                $query->where('precio', '<=', $request->precio);
            }
        }

        if ($request->filled('kilometraje')) {
            $this->aplicarFiltroKilometraje($query, $request->kilometraje);
        }

        if ($request->filled('transmision')) {
            $query->where('transmision', $request->transmision);
        }

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('combustible')) {
            $query->where('combustible', $request->combustible);
        }

        $autos = $query->paginate(10);

        // Datos adicionales para los filtros
        $marcas = Auto::select('marca')->distinct()->get();
        $modelos = Auto::select('modelo')->distinct()->get();

        return view('Shared._Layout', [
            'renderBody' => view('Autos.Index_usados', compact('autos', 'marcas', 'modelos'))->render()
        ]);
    }

    /**
     * Aplica el filtro de kilometraje correctamente.
     */
    private function aplicarFiltroKilometraje($query, $kilometraje)
    {
        $rangos = [
            "20000"  => [0, 20000],
            "40000"  => [20001, 40000],
            "60000"  => [40001, 60000],
            "80000"  => [60001, 80000],
            "100000" => [80001, 100000],
            "100000+" => [100001, PHP_INT_MAX]
        ];

        if (isset($rangos[$kilometraje])) {
            $query->whereBetween('kilometraje', $rangos[$kilometraje]);
        }
    }

    /**
     * Muestra los detalles de un auto específico con todas sus imágenes.
     */
    public function show($id)
    {
        $auto = Auto::with('imagenes')->find($id);

        if (!$auto) {
            return response()->json(['error' => 'Auto no encontrado'], 404);
        }

        return response()->json($auto);
    }
}
