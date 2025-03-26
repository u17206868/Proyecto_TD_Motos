<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    
    public function index()
    {
        $data = [
            'renderBody' => view('Noticias/Index')
        ];

        return view('Shared/_Layout', $data);
    }
}
