@extends('app')

@section('content')

    <h1>Universidad Tecnologica Metropolitana</h1>

    <h2>Asignar nuevo Encargado <small>Campus {{ $campus->nombre }}</small></h2>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Asignar Encargado</div>
                    <div class="panel-body">

                        {!! Form::model($campus, ['url' => ['administrador/campus/asignar-encargado', $campus], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('rut_encargado', 'Rut Encargado: ') !!}
                            {!! Form::text('rut_encargado', null, ['class' => 'form-control', 'placeholder' => 'Rut Encargado de Campus']) !!}
                            <span id="helpBlock" class="help-block"><small>*Rut sin puntos, ni guiones</small></span>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Actualizar Encargado', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <a class="btn btn-info" href="/administrador/campus" role="button">Volver</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop