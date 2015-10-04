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
            { "Nombre: " $module->name() }
        </div>
    </div>
    <div class="row">
        <a href="/modulos/create">Crear</a>
    </div>
</div>
    @stop
