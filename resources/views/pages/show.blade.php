
@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de paginas </h1>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <h5>Pagina: {!! $page->page_number !!}</h5>
            <h5>Modulo Padre: {!! $page->module->name !!}</h5>
            <h5>Paginas Proyectadas: {!! $page->page_stage !!}</h5>
            <h5>Estadio de Diagramacion: {!! $page->layout_stage !!}</h5>
            <h5>Obserbaciones: {!! $page->notes !!}</h5>
        </div>
    </div>
    <div class="row">
        <a href="/paginas/create">Crear</a>
    </div>
</div>
@stop
