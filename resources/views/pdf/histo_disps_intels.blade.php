<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Historial-Dispositivo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            margin-top: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
        }

        .table {
            width: 100%;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table td, .table th {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabla de Historial-Dispositivo</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Inicio</th>
                    <th>Hora</th>
                    <th>Valor</th>
                    <th>Dispositivo Inteligente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histosDispsIntels as $histosDispsIntel)
                    <tr>
                        <td>{{ $histosDispsIntel->id }}</td>
                        <td>{{ $histosDispsIntel->fecha_inicio }}</td>
                        <td>{{ $histosDispsIntel->hora }}</td>
                        <td>{{ $histosDispsIntel->valor }}</td>
                        <td>{{ $histosDispsIntel->dispsIntel->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
