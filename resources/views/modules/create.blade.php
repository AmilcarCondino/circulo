@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> Modulues create page </h1>
    </div>
    <div class="col-sm-12">
        <a href="/modulos">modulos index</a>

        <div class="col-sm-12">
            {!! Form::open(array('url' => 'modulos')) !!}
                @include ('modules.form', ['submitButtonText' => 'Crear Modulo'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
