<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('contacto');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
        Contacto::create($request->all());
        return redirect()->back()->with('mensaje', '¡Tu mensaje ha sido enviado! ¡Gracias!');
    }

    public function index()
    {
        $contactos = Contacto::all(); // Asegúrate de importar el modelo Contacto
        return view('contactos.index', compact('contactos'));
    }

    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));
    }

    public function update(Request $request, Contacto $contacto)
    {
        $contacto->update($request->all());
        return redirect()->route('contactos.index')->with('success', 'Contacto actualizado correctamente!')->without('success');

    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado correctamente.');
    }
}
