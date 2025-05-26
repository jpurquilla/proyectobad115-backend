<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleadoController;
use App\Http\Controllers\Api\PuestoController;
use App\Http\Controllers\Api\Estructura_organizativaController;
use App\Http\Controllers\Api\Empleado_puestoController;
use App\Http\Controllers\Api\Documento_empleadoController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\PerfilController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\Perfil_menuController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\PlanillaController;
use App\Http\Controllers\Api\Planilla_detalleController;
use App\Http\Controllers\Api\TipoaportacionesController;
use App\Http\Controllers\Api\TipodescuentoController;
use App\Http\Controllers\Api\Planilla_aportacionesController;
use App\Http\Controllers\Api\Planilla_detalle_descuentosController;
use App\Http\Controllers\Api\Planilla_detalle_ingresosController;
use App\Http\Controllers\Api\DescuentoController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('empleado', EmpleadoController::class);
Route::apiResource('puestos', PuestoController::class);
Route::apiResource('estructura_organizativa', Estructura_OrganizativaController::class);
Route::apiResource('empleado_puesto', Empleado_PuestoController::class);
Route::apiResource('documento_empleado', Documento_EmpleadoController::class);
Route::apiResource('email', EmailController::class);
Route::apiResource('perfil', PerfilController::class);
Route::apiResource('menu', MenuController::class);
Route::apiResource('perfil-menu', Perfil_MenuController::class);
Route::apiResource('usuario', UsuarioController::class);
Route::apiResource('planillas', PlanillaController::class);
Route::apiResource('planilla_detalles', Planilla_DetalleController::class);
Route::apiResource('tipo_aportaciones', TipoAportacionesController::class);
Route::apiResource('tipo_descuentos', TipoDescuentoController::class);
Route::apiResource('planilla_aportaciones', Planilla_AportacionesController::class);
Route::apiResource('planilla_detalle_descuentos', Planilla_Detalle_DescuentosController::class);
Route::apiResource('planilla_detalle_ingresos', Planilla_Detalle_IngresosController::class);
Route::apiResource('descuentos', DescuentoController::class);


