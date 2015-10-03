@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> Pages create page </h1>
    </div>
    <div class="col-sm-12">
        <a href="/paginas">paginas index</a>

        <div class="col-sm-12">
            {!! Form::model($images, (array('url' => 'imagenes'))) !!}
                @include ('images.form', ['submitButtonText' => 'Crear Imagen'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
