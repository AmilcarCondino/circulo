
@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de Posibles Fotos </h1>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <h5>Nombre: {!! $possible_photo->name !!}</h5>
            <h5>Imagen ID: {!! $possible_photo->image->id !!}</h5>
            <h5>Seleccionada: {!! $possible_photo->selected !!}</h5>
            <h5>Descargada: {!! $possible_photo->downloaded !!}</h5>
            <h5>Rechazada: {!! $possible_photo->rejected !!}</h5>
            <h5>URL: {!! $possible_photo->url !!}</h5>
        </div>
    </div>
    <div class="row">
        <a href="/possible_photos/create" class="btn btn-sm btn-primary">Crear</a>
    </div>
</div>
@stop
