@extends('app')

@section ('title') Editar Docente @stop

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Editar Docente</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Docente</div>
                    <div class="panel-body">

                        {!! Form::model($docente, ['url' => ['docente/editar', $docente], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombres', 'Nombres: ') !!}
                            {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Docente']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellidos', 'Apellidos: ') !!}
                            {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Apellido de Docente']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Actualizar Campus', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <a class="btn btn-info" href="/administrador/campus" role="button">Volver</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

'rut','nombres','apellidos'