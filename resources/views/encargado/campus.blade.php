@extends('app')

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Campus a cargo</small></h1>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingrese rut para ver Campus a su cargo</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => ['encargado/campus-a-cargo'], 'method' => 'GET']) !!}

                        <div class="form-group">
                            {!! Form::label('rut_encargado', 'Rut: ') !!}
                            {!! Form::text('rut_encargado', null, ['class' => 'form-control']) !!}
                            <span id="helpBlock" class="help-block"><small>*Rut sin puntos, ni guión</small></span>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Buscar', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <a class="btn btn-info" href="/encargado" role="button">Volver</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop