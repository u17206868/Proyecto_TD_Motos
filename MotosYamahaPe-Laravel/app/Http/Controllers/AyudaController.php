<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function terminosYCondiciones()
    {
        $data = [
            'renderBody' => view('Ayuda.terminos_y_condiciones')
        ];
        return view('Shared/_Layout', $data);
    }

    public function politicasPublicacion()
    {
        $data = [
            'renderBody' => view('Ayuda.politicas_publicacion')
        ];
        return view('Shared/_Layout', $data);
    }

    public function politicasPrivacidad()
    {
        $data = [
            'renderBody' => view('Ayuda.politicas_privacidad')
        ];
        return view('Shared/_Layout', $data);
    }

    public function politicaCookies()
    {
        $data = [
            'renderBody' => view('Ayuda.politica_cookies')
        ];
        return view('Shared/_Layout', $data);
    }

    public function legales()
    {
        $data = [
            'renderBody' => view('Ayuda.legales')
        ];
        return view('Shared/_Layout', $data);
    }

    public function libroReclamaciones()
    {
        $data = [
            'renderBody' => view('Ayuda.libro_reclamaciones')
        ];
        return view('Shared/_Layout', $data);
    }

    public function tipsYGuias()
    {
        $data = [
            'renderBody' => view('Ayuda.tips_y_guias')
        ];
        return view('Shared/_Layout', $data);
    }
}
