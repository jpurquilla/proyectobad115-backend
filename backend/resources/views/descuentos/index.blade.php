<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Descuentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    
    <h1 class="text-center">Lista de Descuentos</h1>

    <form action="{{ route('descuentos.store') }}" method="POST">
        @csrf
        <label>Descripción:</label>
        <input type="text" name="descripcion" required maxlength="100">

        <label>Porcentaje (%):</label>
        <input type="number" name="porcentaje" required step="0.01" min="0" max="100">

        <label>Monto Fijo ($):</label>
        <input type="number" name="monto_fijo" step="0.01" min="0">

        <button type="submit">Guardar</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Porcentaje</th>
                <th>Monto Fijo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($descuentos as $descuento)
                <tr>
                    <td>{{ $descuento->iddescuento }}</td>
                    <td>{{ $descuento->descripcion }}</td>
                    <td>{{ $descuento->porcentaje }}%</td>
                    <td>${{ $descuento->monto_fijo }}</td>
                    <td>
                        <a href="{{ route('descuentos.edit', $descuento->iddescuento) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('descuentos.destroy', $descuento->iddescuento) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
