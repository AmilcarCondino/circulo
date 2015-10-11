@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <h1> Proyectos edit page </h1>
</div>

<div class="col-sm-12">
    <a href="/proyectos">Proyectos index</a>

    <div class="col-sm-12">
        {!! Form::model($project,array('method' => 'PATCH', 'route' => ['proyectos.update', $project->id])) !!}
            @include('projects.form', ['submitButtonText' => 'Editar Proyecto'])
        {!! Form::close() !!}

@stop