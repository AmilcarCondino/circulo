@extends('layouts/header')

@section('content')

<div class="col-sm-12">
    <h1> paginas edit page </h1>
</div>

<div class="col-sm-12">
    <a href="/paginas">paginas index</a>

    <div class="col-sm-12">
        {!! Form::model($page,array('method' => 'PATCH', 'route' => ['paginas.update', $page->id])) !!}
            @include('pages.form', ['submitButtonText' => 'Editar Pagina'])
        {!! Form::close() !!}

        @stop