<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

    <title>Cliente</title>

</head>
<body>
    <h1 >Cliente</h1>

<div class="col-md-5">

			<table class="table table-striped table-hover" id="myTable">

		<thead class="table-Dark">

		<tr>
			<th> Id </th>
            <th> Nombre </th>
            <th> Direcion </th>
            <th> Telefono </th>
            <th> </th>
            <th> </th>



		</tr>



     <tbody>
          @foreach($Cliente as $cliente);
          <tr>
          <th>{{$cliente->id}} </th>
          <th>{{$cliente->nombre}}</th>
          <th>{{$cliente->direccion}}</th>
          <th>{{$cliente->telefono}}</th>
          <td>
            <a href="{{url('cliente/'.$cliente->id.'/edit')}}" class="btn btn-outline-primary btn-sm" > Editar </a></td>
          <td>
            <form action="{{url('cliente/'.$cliente->id)}}" method="POST">
                @method('DELETE')
                @csrf
            <button type="submit" class="btn btn-warning btn-sm"> Eliminar </button></td></form>

					</tr>
          @endforeach
</tbody>
                </thead>

			</table>
            <h1><a class="btn btn-Success btn-sm" href="{{url('Registrar')}}">Agregar</a></h1>

</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>

<script>
	let table = new DataTable('#myTable');
</script>

</body>
</html>
