@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <div class="col-sm-12">
        <h1> Proyectos edit page </h1>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-12">
            {!! Form::model($project,array('method' => 'PATCH', 'route' => ['proyectos.update', $project->id])) !!}
                @include('projects.form', ['submitButtonText' => 'Editar Proyecto'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop