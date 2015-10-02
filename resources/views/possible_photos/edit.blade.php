@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <h1> paginas edit page </h1>
</div>

<div class="col-sm-12">
    <a href="/fotos_posibles">fotos pocibles index</a>

    <div class="col-sm-12">
        {!! Form::model($possible_photos,array('method' => 'PATCH', 'route' => ['fotos_posibles.update', $possible_photos->id])) !!}
            @include('possible_photos.form', ['submitButtonText' => 'Editar foto pocible'])
        {!! Form::close() !!}

        @<stop></stop>