<form action="{{ route('descuentos.update', $descuento->iddescuento) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Descripción:</label>
    <input type="text" name="descripcion" value="{{ $descuento->descripcion }}" required>

    <label>Porcentaje (%):</label>
    <input type="number" name="porcentaje" value="{{ $descuento->porcentaje }}" required step="0.01" min="0" max="100">

    <label>Monto Fijo ($):</label>
    <input type="number" name="monto_fijo" value="{{ $descuento->monto_fijo }}" step="0.01" min="0">

    <button type="submit">Actualizar Descuento</button>
</form>
