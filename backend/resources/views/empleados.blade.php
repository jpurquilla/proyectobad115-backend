<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <label>Primer Nombre:</label>
            <input type="text" name="primer_nombre" required>
            
            <label>Primer Apellido:</label>
            <input type="text" name="primer_apellido" required>

            <label>Género:</label>
            <select name="idcatalogogenero">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>

            <button type="submit">Guardar</button>
        </form>


    <h1 class="text-center">Lista de Empleados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->idempleado }}</td>
                    <td>{{ $empleado->primer_nombre }} {{ $empleado->segundo_nombre }}</td>
                    <td>{{ $empleado->primer_apellido }} {{ $empleado->segundo_apellido }}</td>
                    <td><a href="{{ route('empleados.edit', $empleado->idempleado) }}" class="btn btn-warning btn-sm">Editar</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
