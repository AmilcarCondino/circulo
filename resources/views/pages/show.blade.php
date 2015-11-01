
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
            <h5>Estadio de Pagina: {!! $page->page_stage !!}</h5>
            <h5>Estadio de Diagramacion: {!! $page->layout_stage !!}</h5>
            <h5>Obserbaciones: {!! $page->notes !!}</h5>
        </div>
    </div>

    <div class="col-sm-6">

    </div>

    <div class="row">
        <a href="/paginas/create" class="btn btn-sm btn-primary">Crear</a>
    </div>
</div>
@stop
