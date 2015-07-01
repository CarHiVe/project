@extends('app')

@section ('title') Editar Campus @stop

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Editar Campus</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Campus</div>
                    <div class="panel-body">

                        {!! Form::model($campus, ['url' => ['administrador/campus/editar-campus', $campus], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre: ') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Campus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección: ') !!}
                            {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección de Campus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitud', 'Latitud: ') !!}
                            {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => 'Latitud de Campus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitud', 'Longitud: ') !!}
                            {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => 'Longitud de Campus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción: ') !!}
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción de Campus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rut_encargado', 'Rut Encargado: ') !!}
                            {!! Form::text('rut_encargado', null, ['class' => 'form-control', 'placeholder' => 'Rut Encargado de Campus']) !!}
                            <span id="helpBlock" class="help-block"><small>*Rut sin puntos, ni guión</small></span>
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