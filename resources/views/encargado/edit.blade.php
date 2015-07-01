@extends('app')

@section ('title') Editar Sala @stop

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Editar Sala</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Sala</div>
                    <div class="panel-body">

                        {!! Form::model($salas, ['url' => ['encargado/salas/editar', $salas], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre: ') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Sala']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción: ') !!}
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción de Sala']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Actualizar Sala', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <a class="btn btn-info" href="/encargado/buscar" role="button">Volver</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop