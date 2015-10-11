@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de imagines </h1>
        </div>
    </div>
    <div class="row">
        <div class="table table-hover">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Imagen</th>
                    <th>Asignacion</th>
                    <th>Estadio</th>
                    <th>Model</th>
                    <th>Pedido</th>
                    <th>Pagina</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $image)
                <tr>
                    <td>
                        {!! link_to_route('imagenes.show', $image->id, [$image]) !!}
                    </td>
                    <td>
                        {{ $image->image_sort }}
                    </td>
                    <td>
                        {{ $image->assigned_to }}
                    </td>
                    <td>
                        {{ $image->stage }}
                    </td>
                    <td>
                        {{ $image->model_file }}
                    </td>
                    <td>
                        {{ $image->request }}
                    </td>
                    <td>
                        {{ $image->page_id }}
                    </td>
                    <td>
                        {!! link_to_route('imagenes.edit', 'Editar nuevo', [$image->id], ['class' => 'btn btn-sm btn-primary']) !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['imagenes.destroy', $image->id]]) !!}

                        {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


            <a href="/imagenes/create">Crear</a>
        </div>
    </div>
    @stop