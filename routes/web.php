<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ChatbotController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/equipo', function () {
    return view('equipo');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto.mostrar');
Route::post('/contacto', [ContactoController::class, 'procesarFormulario'])->name('contacto.procesar');

Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');

// Ruta para mostrar el formulario de edición
Route::get('/contactos/{contacto}/edit', [ContactoController::class, 'edit'])->name('contactos.edit');
//Route::get('/contactos/{contacto}/edit', 'ContactoController@edit')->name('contactos.edit');

// Ruta para actualizar el contacto después de la edición
Route::put('/contactos/{contacto}', [ContactoController::class, 'update'])->name('contactos.update');

// Ruta para eliminar el contacto
Route::delete('/contactos/{contacto}', [ContactoController::class, 'destroy'])->name('contactos.destroy');

//ChatBot
Route::get('/chat', [ChatbotController::class, 'chat']);
Route::post('/chat', [ChatbotController::class, 'procesarPregunta']);
Route::get('/entrenar', [ChatbotController::class, 'entrenar']);
Route::post('/entrenar', [ChatbotController::class, 'guardarEntrenamiento']);

Route::post('/procesar-pregunta', [ChatbotController::class, 'procesarPregunta'])->name('procesar-pregunta');

// Ruta para guardar el entrenamiento
Route::post('/guardar-entrenamiento', [ChatbotController::class, 'guardarEntrenamiento'])->name('guardar-entrenamiento');