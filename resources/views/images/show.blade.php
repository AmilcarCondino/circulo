
@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Pagina </h1>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <h5>ID: {!! $image->id !!}</h5>
            <h5>Pagina numero: {!! $image->page->page_number !!}</h5>
            <h5>Tipo de Imagen: {!! $image->image_sort !!}</h5>
            <h5>Etapa: {!! $image->stage !!}</h5>
            <h5>Modelo: {!! $image->model_file !!}</h5>
            <h5>Pedido: {!! $image->request !!}</h5>
        </div>
    </div>
    <div class="row">
        <a href="/imagenes/create" class="btn btn-sm btn-primary">Crear</a>
    </div>
</div>
@stop
