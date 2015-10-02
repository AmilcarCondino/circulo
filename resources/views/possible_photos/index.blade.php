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
                    <th>Numero de pagina</th>
                    <th>Modulo</th>
                    <th>Estadio de la pagina</th>
                    <th>Estadio de Diagramacion</th>
                    <th>Observaciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($possible_photos as $possible_photo)
                <tr>
                    <td>
                        {{ $possible_photo->possible_photo_number }}
                    </td>
                    <td>
                        {{ $possible_photo->module_id }}
                    </td>
                    <td>
                        {{ $possible_photo->possible_photo_stage }}
                    </td>
                    <td>
                        {{ $possible_photo->layout_stage }}
                    </td>
                    <td>
                        {{ $possible_photo->notes }}
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