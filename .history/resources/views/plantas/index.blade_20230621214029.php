@extends('home2')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/page.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <title>Usuarios</title>
</head>
<br>
<div class="container is-fluid">
    <br>
    <br>
    <div class="col-xs-12">
        <h1></h1>
    <br>
      <h1>PLANTAS</h1>
  <br>
		<div>
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="modal" data-target="#create">
				<span style="color: rgb(4, 234, 255)">Nuevo usuario   <i class="fa fa-plus"></i> </a></button>
                <br>
                <br>
    <div class="container-fluid">
  <form class="d-flex">
			<form action="{{route('index.index')}}" method="GET">
			<input style="background-color: rgb(58, 242, 101)" type="text" placeholder="Buscar"
			name="texto">
            <br>
			<button style="background-color: rgb(17, 198, 243)"type="submit" name="Buscar"> <b>Buscar </b> </button>
			</form>
  </div>
  <br>
  <br>


  <table class="table table-striped table-bordered table-Info" id="table_id">
                <thead class="bg-danger text-white">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>idTipo</th>
                        <th>max_humedad</th>
                        <th>max_luminusidad</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                @foreach ($planta as $planta)

                <tr class="">
                    <td>{{$planta->id}}</td>
                    <td>{{$planta->nombre}}</td>
                    <td>{{$planta->idTipo}}</td>
                    <td>{{$planta->max_humedad}}</td>
                    <td>{{$planta->max_luminusidad}}</td>
                    <td>
                        <button type="button" style="background-color: rgb(0, 225, 255)" data-toggle="modal" data-target="#edit{{$planta->id}}">
                            Editar
                          </button>
                          <button type="button" style="background-color: rgb(0, 225, 255)" data-toggle="modal" data-target="#delete{{$planta->id}}">
                            Eliminar
                          </button>
                    </td>
                </tr>
                @include('plantas.delete')
                @include('plantas.info')
                @endforeach


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  <script src="../package/dist/sweetalert2.all.js"></script>
  <script src="../package/dist/sweetalert2.all.min.js"></script>
  <script src="../package/jquery-3.6.0.min.js"></script>

  <script src="../js/page.js"></script>
  <script src="../js/buscador.js"></script>
  <script src="../js/user.js"></script>
            </tbody>
        </table>
    </div>
    @include('plantas.create')

    <div class="col-md-4"></div>
</div>










@endsection
