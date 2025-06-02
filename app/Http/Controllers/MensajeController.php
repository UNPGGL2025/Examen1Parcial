<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function mensajePersonalizado($mensaje)
    {
        return view('mensajePersonalizado', compact('mensaje'));
    }

    public function mensajeHora(Request $request)
    {
        if ($request->isMethod('post') && $request->filled('hora')) {
            $hora = (int) $request->input('hora');
        } else {
            return view('mensajeHora');
        }

        if ($hora >= 6 && $hora < 12) {
            $mensaje = '🌞 Buenos días';
            $icono = 'bi bi-sun';
            $color = 'primary';
        } elseif ($hora >= 12 && $hora < 18) {
            $mensaje = '🌤️ Buenas tardes';
            $icono = 'bi bi-cloud-sun';
            $color = 'warning';
        } elseif ($hora >= 18 && $hora < 22) {
            $mensaje = '🌇 Buenas noches';
            $icono = 'bi bi-moon-stars';
            $color = 'info';
        } else {
            $mensaje = '🌙 Es de madrugada';
            $icono = 'bi bi-moon';
            $color = 'dark';
        }

        return view('mensajeHora', compact('mensaje', 'icono', 'color', 'hora'));
    }

    public function saludoRepetido($saludo = '¡Hola!', $veces = 1)
    {
        $veces = max(1, min((int)$veces, 100));

        return view('saludoRepetido', compact('saludo', 'veces'));
    }
}
