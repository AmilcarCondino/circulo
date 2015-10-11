@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> Proyectos create page </h1>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-12">
            {!! Form::model($project, (array('url' => 'proyectos'))) !!}
                @include ('projects.form', ['submitButtonText' => 'Crear Proyecto'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
