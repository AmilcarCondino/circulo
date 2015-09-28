@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <h1> modulos edit page </h1>
</div>

<div class="col-sm-12">
    <a href="/modulos">modulos index</a>

    <div class="col-sm-12">
        {!! Form::model($module,array('method' => 'PATCH', 'route' => ['modulos.update', $module->id])) !!}
            @include('modules.form', ['submitButtonText' => 'Editar Modulo'])
        {!! Form::close() !!}

        @stop