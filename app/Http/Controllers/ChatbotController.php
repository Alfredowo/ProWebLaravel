<?php

// app/Http/Controllers/ChatbotController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatbot;

class ChatbotController extends Controller
{
    public function chat()
    {
        // Obtener todas las preguntas y respuestas de la base de datos
        $preguntasRespuestas = Chatbot::all();

        return view('chat.chat', ['preguntasRespuestas' => $preguntasRespuestas]);
    }

    public function procesarPregunta(Request $request)
    {
        $pregunta = $request->input('pregunta');

        // Buscar la respuesta en la base de datos
        $respuesta = Chatbot::where('pregunta', $pregunta)->first();

        if ($respuesta) {
            return response()->json(['respuesta' => $respuesta->respuesta]);
        } else {
            return response()->json(['respuesta' => 'Lo siento, no sé la respuesta.']);
        }
    }

    public function entrenar()
    {
        return view('chat.entrenar');
    }

    public function guardarEntrenamiento(Request $request)
    {
        $pregunta = $request->input('pregunta');
        $respuesta = $request->input('respuesta');

        // Validar y guardar en la base de datos
        $this->validate($request, [
            'pregunta' => 'required',
            'respuesta' => 'required',
        ]);

        // Guardar en la base de datos
        Chatbot::create([
            'pregunta' => $pregunta,
            'respuesta' => $respuesta,
        ]);

        return redirect('/entrenar')->with('success', 'Entrenamiento guardado correctamente.');
    }
}

