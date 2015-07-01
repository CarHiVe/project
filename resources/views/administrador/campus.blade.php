@extends('app')

@section ('title') Campus @stop

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Campus</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table table-default">
                    <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Descripcion</th>
                                <th>Rut Encargado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campus as $campus)
                                <tr>
                                    <td>{{ $campus->id }}</td>
                                    <td>{{ $campus->nombre }}</td>
                                    <td>{{ $campus->direccion }}</td>
                                    <td>{{ $campus->latitud }}</td>
                                    <td>{{ $campus->longitud }}</td>
                                    <td>{{ $campus->descripcion }}</td>
                                    <td>{{ $campus->rut_encargado }}</td>
                                    <td>
                                        <a href="{{ url('administrador/campus/editar-campus', $campus) }}" class="btn btn-link">Editar</a>
                                        <a href="{{ url('administrador/campus/asignar-encargado', $campus) }}" class="btn btn-link">Asignar otro Encargado</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-info" href="/administrador" role="button">Volver a Pagina Principal</a>


@stop