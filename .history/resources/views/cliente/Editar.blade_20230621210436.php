<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Editar</title>

</head>
<body>
    <div class="container mt-5">

                <form action="{{route('clientes.update'.$Cliente->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                <label>NOMBRE</label>
                <input class="form-control mb-3" value="{{$Cliente->nombre}}" type="text" name="nombre" placeholder="Nombre">
                <label>DIRECCION</label>
                <input class="form-control mb-3" value="{{$Cliente->direccion}}" type="text" name="direccion" placeholder="Direccion">
                <label>TELEFONO</label>
                <input class="form-control mb-3" value="{{$Cliente->telefono}}" type="text" name="telefono" placeholder="Telefono">
                        <input type="submit" value="Guardar" class="btn btn-warning btn-block">
</form><br><br>

</div>
</body>
</html>
