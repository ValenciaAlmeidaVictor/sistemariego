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

    <title>PLANTAS</title>
</head>
<br>
<div class="container is-fluid">
    <br>
    <br>
    <div class="col-xs-12">
        <h1></h1>
    <br>
      <h1>TIPOS DE PLANTAS</h1>
  <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
				<span class="glyphicon glyphicon-plus"></span> Nuevo Sensor   <i class="fa fa-plus"></i> </a></button>
                <a href="http://localhost/Valencia-Victor/public/menu"><button type="button" class="btn btn-info">Inicio</button></a>
      <table class="table table-bordered border-primary" id="table_id">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>descripción</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>

                @foreach ($plantas as $planta)

                <tr class="">
                    <td scope="row">{{$planta->id}}</td>
                    <td>{{$planta->nombre}}</td>
                    <td>{{$planta->descripción}}</td>

                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$planta->id}}">
                            Editar
                          </button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$planta->id}}">
                            Eliminar
                          </button>
                    </td>
                </tr>
                @include('planta.delete')
                @include('planta.info')
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
    @include('planta.create')

    <div class="col-md-4"></div>
</div>










@endsection
