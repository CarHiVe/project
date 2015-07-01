@extends('app')

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Campus</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table table-default">
                    <table class="table table-striped" >

                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Descripcion</th>
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
                                <td>
                                    <a href="{{ url('encargado/campus-a-cargo', $campus) }}" class="btn btn-link">Ver salas</a>
                                    <a href="{{ url('encargado/crear-curso', $campus) }}" class="btn btn-link">Ingresar nuevo Curso</a>
                                    <a href="{{ url('encargado/crear-asignatura', $campus) }}" class="btn btn-link">Ingresar nueva Asignatura</a>
                                    <a href="{{ url('encargado/crear-estudiante', $campus) }}" class="btn btn-link">Ingresar nuevo Estudiante</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-info" href="/encargado" role="button">Volver a Pagina Principal</a>

@stop