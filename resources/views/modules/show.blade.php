@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de modulos </h1>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">
            <h5>Nombre: {!! $module->name !!}</h5>
            @if ($module->project_id !== 0)
                <h5>Projecto Padre: {!! $module->project->name !!}</h5>
            @endif
            @if ($module->module_id !== 0)
                <h5>Modulo Padre: {!! $module->module_id !!}</h5>
            @endif
            <h5>Paginas Proyectadas: {!! $module->projected_total_pages !!}</h5>
        </div>
    </div>
    <div class="row">
        <a href="/modulos/create">Crear</a>
    </div>
</div>
@stop
