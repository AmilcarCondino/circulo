@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de imagines </h1>
        </div>
    </div>
    <div class="row">
        @foreach($images as $image)
        <div class="table table-bordered">
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
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Seleccionado</th>
                            <th>Descargado</th>
                            <th>URL</th>
                            <th>Id de Imagen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($possible_photos as $possible_photo)
                        @if ( $possible_photo->image_id === $image->id)
                        <tr class="info">
                            <td>
                                {!! link_to_route('fotos_posibles.show', $possible_photo->name, [$possible_photo]) !!}
                            </td>
                            <td>
                                {{ $possible_photo->selected }}
                            </td>
                            <td>
                                {{ $possible_photo->downloaded }}
                            </td>
                            <td>
                                {{ $possible_photo->url }}
                            </td>
                            <td>
                                {{ $possible_photo->image_id }}
                            </td>
                            <td>
                                {!! link_to_route('fotos_posibles.edit', 'Editar', [$possible_photo->id], ['class' => 'btn btn-sm btn-primary']) !!}
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['fotos_posibles.destroy', $possible_photo->id]]) !!}

                                {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                </tbody>
            </table>
            <a href="/fotos_posibles/create" class="btn btn-sm btn-success">Crear Foto</a>
        </div>
        @endforeach

        <a href="/imagenes/create" class="btn btn-sm btn-primary">Crear</a>
    </div>
    @stop