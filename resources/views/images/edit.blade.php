@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <h1> paginas edit page </h1>
</div>

<div class="col-sm-12">
    <a href="/imagenes">paginas index</a>

    <div class="col-sm-12">
        {!! Form::model($image,array('method' => 'PATCH', 'route' => ['imagenes.update', $image->id])) !!}
            @include('images.form', ['submitButtonText' => 'Editar Imagen'])
        {!! Form::close() !!}

        @stop