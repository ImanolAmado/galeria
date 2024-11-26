<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;

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

Route::get('/', function () {
    return view('welcome');
});



// RUTAS EJERCICIO GALERIA

Route::get('/galeria', [GaleriaController::class, 'index'])->name('indexGaleria');
Route::get('/galeria/{id}', [GaleriaController::class, 'show'])->name('showGaleria');
