<form action="{{ route('empleados.update', $empleado->idempleado) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Primer Nombre:</label>
    <input type="text" name="primer_nombre" value="{{ $empleado->primer_nombre }}" required>

    <label>Primer Apellido:</label>
    <input type="text" name="primer_apellido" value="{{ $empleado->primer_apellido }}" required>

    <label>Género:</label>
    <select name="idcatalogogenero">
        <option value="1" {{ $empleado->idcatalogogenero == 1 ? 'selected' : '' }}>Masculino</option>
        <option value="2" {{ $empleado->idcatalogogenero == 2 ? 'selected' : '' }}>Femenino</option>
    </select>

    <button type="submit">Actualizar Empleado</button>
</form>
