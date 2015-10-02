@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> opciones create page </h1>
    </div>
    <div class="col-sm-12">
        <a href="/fotos_posibles">opciones index</a>

        <div class="col-sm-12">
            {!! Form::open(array('url' => 'fotos_posibles')) !!}
                @include ('possible_photos.form', ['submitButtonText' => 'Crear Pagina'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
