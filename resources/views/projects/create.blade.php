@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> Proyectos create page </h1>
    </div>
    <div class="col-sm-12">
        <a href="/proyectos">proyectos index</a>

        <div class="col-sm-12">
            {!! Form::open(array('url' => 'proyectos')) !!}
                @include ('projects.form', ['submitButtonText' => 'Crear Proyecto'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
