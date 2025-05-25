<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleadoController;


Route::get('/empleados', [EmpleadoController::class, 'mostrarVista'])->name('empleados.vista');



Route::get('/', function () {     return view('welcome'); });
