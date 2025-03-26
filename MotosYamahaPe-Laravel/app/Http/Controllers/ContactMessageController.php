<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Guardar el mensaje en la base de datos
        $contactMessage = ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Enviar un correo electrónico de confirmación (opcional)
        Mail::raw("Nuevo mensaje de contacto:\n\nNombre: {$contactMessage->name}\nCorreo: {$contactMessage->email}\nMensaje: {$contactMessage->message}", function ($mail) use ($contactMessage) {
            $mail->to('tuautopesoporte@gmail.com')
                ->from('tuautopesoporte@gmail.com', 'MotosYamaha.pe') // Desde el correo configurado en .env
                ->subject('Nuevo mensaje de contacto');
        });

        // Redirigir con un mensaje de éxito
        return back()->with('success', 'Tu mensaje ha sido enviado correctamente. ¡Gracias por contactarnos!');
    }
}
