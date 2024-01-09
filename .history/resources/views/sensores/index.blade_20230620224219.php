@extends('layouts.home')

@section('content')

<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h1>Sensores.</h1>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Agregar
</button>
<br>
<br>

<div class="table-responsive">
    <table class="table table-primary">
        <thead class="bg-dark text-hite">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo de sensor</th>
                <th>Costo</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sensores as $sensor)
            <tr>
                <td>{{$sensor->id}}</td>
                <td>{{$sensor->nombre}}</td>
                <td>{{$sensor->tipoSensor}}</td>
                <td>{{$sensor->costo}}</td>
                <td>{{$sensor->cantidad}}</td>
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$sensor->id}}">
                            Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$sensor->id}}">
                    Eliminar
        </button>
            
                </td>
            </tr>
            @include('sensores.modal-info')
            @endforeach
        </tbody>
    </table>
</div>
        @include('sensores.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
