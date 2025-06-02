<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MensajeController;

Route::get('/mensaje/{mensaje}', [MensajeController::class, 'mensajePersonalizado']);

Route::match(['get', 'post'], '/mensaje-hora', [MensajeController::class, 'mensajeHora']);



Route::get('/saludo-repetido/{saludo}/{veces}', [MensajeController::class, 'saludoRepetido']);
