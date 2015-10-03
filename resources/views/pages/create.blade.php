@extends('layouts/header')

@section('content')

<div class="container">
    <div class="col-sm-12">
        <h1> Pages create page </h1>
    </div>
    <div class="col-sm-12">
        <a href="/paginas">paginas index</a>

        <div class="col-sm-12">
            {!! Form::model($pages, (array('url' => 'paginas'))) !!}
                @include ('pages.form', ['submitButtonText' => 'Crear Pagina'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
