@extends('layouts.app')

@section('content')
    <h1>Detalles del Descuento</h1>

    <p><strong>ID:</strong> {{ $descuento->iddescuento }}</p>
    <p><strong>Descripción:</strong> {{ $descuento->descripcion }}</p>
    <p><strong>Porcentaje:</strong> {{ $descuento->porcentaje }}%</p>
    <p><strong>Monto Fijo:</strong> ${{ $descuento->monto_fijo }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $descuento->created_at }}</p>
    <p><strong>Última Actualización:</strong> {{ $descuento->updated_at }}</p>

    <a href="{{ route('descuentos.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('descuentos.edit', $descuento->iddescuento) }}" class="btn btn-warning">Editar</a>
@endsection
