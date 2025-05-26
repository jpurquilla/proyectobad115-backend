<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\DescuentoController;

//descuentos

Route::get('/descuentos', [DescuentoController::class, 'index'])->name('descuentos.index');  // Mostrar todos los descuentos
Route::get('/descuentos/create', [DescuentoController::class, 'create'])->name('descuentos.create');  // Mostrar formulario de creación
Route::post('/descuentos', [DescuentoController::class, 'store'])->name('descuentos.store');  // Guardar nuevo descuento
Route::get('/descuentos/{id}', [DescuentoController::class, 'show'])->name('descuentos.show');  // Ver detalle de un descuento
Route::get('/descuentos/{id}/edit', [DescuentoController::class, 'edit'])->name('descuentos.edit');  // Mostrar formulario de edición
Route::put('/descuentos/{id}', [DescuentoController::class, 'update'])->name('descuentos.update');  // Actualizar descuento
Route::delete('/descuentos/{id}', [DescuentoController::class, 'destroy'])->name('descuentos.destroy');  // Eliminar descuento
Route::resource('descuentos', DescuentoController::class);

//empleados
Route::get('/empleados', [EmpleadoController::class, 'mostrarVista'])->name('empleados.vista');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{id}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/{id}', [EmpleadoController::class, 'update'])->name('empleados.update');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.vista');




Route::get('/', function () {     return view('welcome'); });
