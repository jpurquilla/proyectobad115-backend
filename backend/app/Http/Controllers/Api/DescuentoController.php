<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Descuento;

class DescuentoController extends Controller
{
    public function index()
    {
        $descuentos = Descuento::all();
        return view('descuentos.index', compact('descuentos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|max:100',
            'porcentaje' => 'required|numeric|min:0|max:100',
            'monto_fijo' => 'nullable|numeric|min:0'
        ]);

        Descuento::create($request->all());

        return redirect()->route('descuentos.index')->with('success', 'Descuento creado exitosamente');
    }

    public function show($id)
    {
        $descuento = Descuento::find($id);
        if (!$descuento) return response()->json(['mensaje' => 'Descuento no encontrado'], 404);

        return response()->json($descuento, 200);
    }

    public function update(Request $request, $id)
    {
        $descuento = Descuento::find($id);
        if (!$descuento) return response()->json(['mensaje' => 'Descuento no encontrado'], 404);

        $descuento->update($request->all());
        //return response()->json(['mensaje' => 'Descuento actualizado', 'data' => $descuento], 200);
        return redirect()->route('descuentos.index')->with('success', 'Descuento creado exitosamente');
    }

    public function destroy($id)
    {
        $descuento = Descuento::find($id);
        if (!$descuento) return response()->json(['mensaje' => 'Descuento no encontrado'], 404);

        $descuento->delete();
        //return response()->json(['mensaje' => 'Descuento eliminado'], 200);
         return redirect()->route('descuentos.index')->with('success', 'Descuento eliminado exitosamente');
    }

    public function edit($id)
    {
        $descuento = Descuento::findOrFail($id);
        //return view('descuentos.edit', compact('descuento'));
        return redirect()->route('descuentos.index')->with('success', 'Descuento actualziado exitosamente');
    }


}
