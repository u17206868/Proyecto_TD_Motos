<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $imageUrl = asset('images/qsomos.jpg');
        $data = [
            'renderBody' => view('Servicios/Index', compact('imageUrl')),
        ];

        return view('Shared/_Layout', $data);
    }
}
