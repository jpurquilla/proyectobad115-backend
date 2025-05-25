<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mostrarVista()
    {
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }


    public function index()
    {
        //
         return response()->json(Empleado::all(), 200);
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return redirect()->route('empleados.vista')->with('success', 'Empleado agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $empleado = Empleado::find($id);
        if (!$empleado) return response()->json(['mensaje' => 'Empleado no encontrado'], 404);
        return response()->json($empleado, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $empleado = Empleado::find($id);
        if (!$empleado) return response()->json(['mensaje' => 'Empleado no encontrado'], 404);

        $empleado->update($request->all());
        return response()->json($empleado, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        if (!$empleado) return response()->json(['mensaje' => 'Empleado no encontrado'], 404);

        $empleado->delete();
        return response()->json(['mensaje' => 'Empleado eliminado'], 200);
        //
    }
}
