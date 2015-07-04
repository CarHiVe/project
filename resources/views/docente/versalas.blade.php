@extends('app')

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Salas</small></h1>

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
                            <th>Tipo</th>
                            <th>Campus</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($salas as $sala)
                            <tr>
                                <td>{{ $sala->id }}</td>
                                <td>{{ $sala->nombre }}</td>
                                <td>{{ $sala->descripcion }}</td>
                                <td>{{ $sala->tipo_sala_id}} </td>
                                <td>{{ $sala->campus_id}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-info" href="/docentes" role="button">Volver a Pagina Principal</a>
@stop