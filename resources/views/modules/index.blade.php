@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de modulos </h1>
        </div>
        <div><h3>Modulos faltantes: {!! $modules_count !!}</h3></div>
    </div>
    <div class="row">
        <div class="table table-hover">
            <table class="table">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Paginas Proyectadas</th>
                    <th>Proyecto al que pertenece</th>
                    <th>Modulo Padre</th>
                </tr>
                </thead>
                <tbody>
                @foreach($modules as $module)
                <tr>
                    <td>
                        {!! link_to_route('paginas.index', $module->name, ['module_id' => $module->id]) !!}
                    </td>
                    <td>
                        {{ $module->projected_total_pages }}
                    </td>
                    <td>
                        {{ $module->project_id }}
                    </td>
                    <td>
                        {{ $module->module_id }}
                    </td>
                    <td>
                        {!! link_to_route('modulos.edit', 'Editar', [$module->id], ['class' => 'btn btn-sm btn-primary']) !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['modulos.destroy', $module->id]]) !!}

                            {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


            <a href="/modulos/create" class="btn btn-sm btn-primary">Crear</a>
        </div>
    </div>
    @stop