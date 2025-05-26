@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Descuento</h1>
    
    <form action="{{ route('descuentos.store') }}" method="POST">
        @csrf
        <label>Descripción:</label>
        <input type="text" name="descripcion" class="form-control" required maxlength="100">

        <label>Porcentaje (%):</label>
        <input type="number" name="porcentaje" class="form-control" required step="0.01" min="0" max="100">

        <label>Monto Fijo ($):</label>
        <input type="number" name="monto_fijo" class="form-control" step="0.01" min="0">

        <button type="submit" class="btn btn-success">Guardar Descuento</button>
    </form>
@endsection
