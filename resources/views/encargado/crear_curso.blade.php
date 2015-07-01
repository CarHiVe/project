@extends('app')

@section('content')

    <h1>Universidad Tecnológica Metropolitana <small>Crear Curso</small></h1>

    <hr/>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Curso</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => 'curso', 'method' => 'POST']) !!}

                        <div class="form-group">
                            {!! Form::label('asignatura_id', 'Asignatura ID: ') !!}
                            {!! Form::text('asignatura_id', null, ['class' => 'form-control', 'placeholder' => 'ID de asignatura correspondiente']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('docente_id', 'Docente ID: ') !!}
                            {!! Form::text('docente_id', null, ['class' => 'form-control', 'placeholder' => 'ID de docente correspondiente']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('semestre', 'Semestre: ') !!}
                            {!! Form::text('semestre', null, ['class' => 'form-control', 'placeholder' => 'Semestre del Curso']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('anio', 'Año: ') !!}
                            {!! Form::text('anio', null, ['class' => 'form-control', 'placeholder' => 'Año del Curso']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('seccion', 'Sección: ') !!}
                            {!! Form::text('seccion', null, ['class' => 'form-control', 'placeholder' => 'Sección del Curso']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Crear Curso', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <a class="btn btn-info" href="/encargado" role="button">Volver</a>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop