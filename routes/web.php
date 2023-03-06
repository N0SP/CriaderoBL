<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/servicios', [WebController::class, 'servicios'])->name('servicios');

Route::get('/contactos', [ContactoController::class, 'contactos'])->name('contactos');
Route::get('/servicios/asesoria', [WebController::class, 'asesoria'])->name('asesoria');
Route::get('/servicios/entrenamiento', [WebController::class, 'entrenamiento'])->name('entrenamiento');
Route::get('/servicios/groomer', [WebController::class, 'groomer'])->name('groomer');
Route::get('/servicios/hospedaje', [WebController::class, 'hospedaje'])->name('hospedaje');
Route::get('/servicios/reproduccion', [WebController::class, 'reproduccion'])->name('reproduccion');
Route::get('/servicios/venta', [WebController::class, 'venta'])->name('venta');

Route::get('/contacts', [ContactoController::class, 'contacts'])->name('contacts');

Route::post('/contacto', [ContactoController::class, 'EnviarContacto']);
