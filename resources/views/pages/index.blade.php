@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de paginas </h1>
        </div>
    </div>
    <div class="row">
        <div class="table table-hover">
            <table class="table">
                <thead>
                <tr>
                    <th>Numero de pagina</th>
                    <th>Modulo</th>
                    <th>Estadio de la pagina</th>
                    <th>Estadio de Diagramacion</th>
                    <th>Observaciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                <tr>
                    <td>
                        {{ $page->page_number }}
                    </td>
                    <td>
                        {{ $page->module_id }}
                    </td>
                    <td>
                        {{ $page->page_stage }}
                    </td>
                    <td>
                        {{ $page->layout_stage }}
                    </td>
                    <td>
                        {{ $page->notes }}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'get', 'route' => ['paginas.edit', $page->id]]) !!}

                            {!! Form::submit('Editar', array('class'=>'btn btn-sm btn-primary')) !!}

                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['paginas.destroy', $page->id]]) !!}

                            {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


            <a href="/paginas/create">Crear</a>
        </div>
    </div>
    @stop