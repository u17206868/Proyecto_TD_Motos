<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Si decides usar correo electrónico

class ContactoController extends Controller
{
    // Mostrar la vista del formulario de contacto
    public function index()
    {
        // Se puede pasar contenido dinámico a la vista si lo necesitas
        // Por ejemplo, si quieres mostrar un mensaje o contenido adicional en la vista
        $renderBody = view('Contactanos.index')->render();

        return view('Shared._Layout', compact('renderBody')); // Asegúrate de pasar la variable al layout principal
    }

    // Procesar el formulario de contacto
    public function enviar(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        // Aquí puedes procesar los datos, como enviarlos por correo electrónico
        // Ejemplo de cómo enviar un correo usando Laravel (solo si has configurado Mail):
        /*
        Mail::to('tu-correo@example.com')->send(new ContactoMail($validated));
        */

        // O también puedes guardar los datos en la base de datos si lo deseas
        /*
        Contacto::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'mensaje' => $validated['mensaje'],
        ]);
        */

        // Redirigir de vuelta con un mensaje de éxito
        return back()->with('success', 'Mensaje enviado correctamente.');
    }
}
