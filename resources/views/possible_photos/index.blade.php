@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de fotos_posibles </h1>
        </div>
    </div>
    <div class="row">
        <div class="table table-hover">
            <table class="table">
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
                <tr>
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
                        {!! Form::open(['method' => 'get', 'route' => ['fotos_posibles.edit', $possible_photo->id]]) !!}

                        {!! Form::submit('Editar', array('class'=>'btn btn-sm btn-primary')) !!}

                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['fotos_posibles.destroy', $possible_photo->id]]) !!}

                        {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


            <a href="/fotos_posibles/create">Crear</a>
        </div>
    </div>
    @stop