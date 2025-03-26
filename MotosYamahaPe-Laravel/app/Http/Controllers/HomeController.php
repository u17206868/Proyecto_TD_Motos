<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Auto; // IMPORTA EL MODELO Auto
use App\Models\Moto; // IMPORTA EL MODELO Moto

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $autos = Auto::all();
        $motos = Moto::all();

        $destacadosAutos = Auto::orderBy('precio', 'asc')->take(4)->get();

        $destacadosMotos = Moto::orderBy('precio', 'asc')->take(4)->get();

        $marcas = Auto::select('marca')->distinct()->get();
        $data = [
            'renderBody' => view('Home.Index', compact('autos', 'motos', 'destacadosAutos', 'destacadosMotos', 'marcas'))
        ];

        return view('Shared._Layout', $data);
    }
    public function getModelos(Request $request)
    {
        $tipo = $request->query('tipo');
        $marca = $request->query('marca');

        if (!$tipo || !$marca) {
            return response()->json(['error' => 'Parámetros inválidos'], 400);
        }

        if ($tipo === 'autos') {
            $modelos = Auto::where('marca', $marca)
                ->distinct()
                ->pluck('modelo');
        } elseif ($tipo === 'motos') {
            $modelos = Moto::where('marca', $marca)
                ->distinct()
                ->pluck('modelo');
        } else {
            return response()->json(['error' => 'Tipo de vehículo no válido'], 400);
        }

        return response()->json(['modelos' => $modelos]);
    }
    public function getañosYPrecios(Request $request)
    {
        $tipo = strtolower($request->query('tipo'));
        $marca = $request->query('marca');

        if (!$tipo || !$marca) {
            return response()->json(['error' => 'Parámetros inválidos'], 400);
        }
        if ($tipo === 'autos') {
            $años = Auto::where('marca', $marca)->distinct()->pluck('año');
            $precios = Auto::where('marca', $marca)->distinct()->pluck('precio');
        } elseif ($tipo === 'motos') {
            $años = Moto::where('marca', $marca)->distinct()->pluck('año');
            $precios = Moto::where('marca', $marca)->distinct()->pluck('precio');
        } else {
            return response()->json(['error' => 'Tipo no válido'], 400);
        }
        return response()->json([
            'años' => $años,
            'precios' => $precios
        ]);
    }
    public function getMarcasYModelos(Request $request)
    {
        $tipo = trim($request->query('tipo'), '"');
        $tipo = strtolower($tipo);

        Log::info("Tipo recibido después de limpiar: " . $tipo);

        if ($tipo == 'autos') {
            $marcas = Auto::select('marca')->distinct()->get();
            $modelos = Auto::select('modelo')->distinct()->get();
        } elseif ($tipo === 'motos') {
            $marcas = Moto::select('marca')->distinct()->get();
            $modelos = Moto::select('modelo')->distinct()->get();
        } else {
            return response()->json(['error' => 'Tipo no válido después de limpiar y formatear: ' . json_encode($tipo)], 400);
        }

        return response()->json([
            'marcas' => $marcas->pluck('marca'),
            'modelos' => $modelos->pluck('modelo')
        ]);
    }
}
