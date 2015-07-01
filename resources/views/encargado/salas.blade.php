@extends('app')

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Salas de Campus {{$campus->nombre}}</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table table-default">
                    <table class="table table-hover table-striped" >

                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($salas as $sala)
                            <tr>
                                <td>{{ $sala->id }}</td>
                                <td>{{ $sala->nombre }}</td>
                                <td>{{ $sala->descripcion }}</td>
                                <td>
                                    <a href="{{ url('encargado/salas/editar', $sala) }}" class="btn btn-link">Editar Sala</a>
                                    <a href="{{ url('encargado/salas/asignar', $sala) }}" class="btn btn-link">Asignar</a>
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