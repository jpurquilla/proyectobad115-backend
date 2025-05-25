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



    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    
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
       // return redirect()->route('empleados.index')->with('success', 'Empleado agregado exitosamente');

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
        $empleado = Empleado::find($id);
        if (!$empleado) return redirect()->route('empleados.index')->with('error', 'Empleado no encontrado');

        $empleado->update($request->all());
        return redirect()->route('empleados.vista')->with('success', 'Empleado actualizado correctamente');
        //return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');

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

    public function edit($id)
    {
        $empleado = Empleado::find($id);
        if (!$empleado) return redirect()->route('empleados.index')->with('error', 'Empleado no encontrado');

        return view('editarempleado', compact('empleado'));


    }



}
