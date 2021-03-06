@extends('layouts/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Lista de Proyectos </h1>
        </div>
    </div>
    <div class="row">
        <div class="table table-hover">
            <table class="table">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autores</th>
                    <th>Modulos Principales Proyectados</th>
                    <th>Paginas Totales Proyectadas</th>
                    <th>Formato</th>
                    <th>Formato Alternativo</th>
                    <th>Materiales Complementarios</th>
                    <th>Observaciones</th>
                    <th>ISBN</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>
                        {!! link_to_route('modulos.index', $project->name, ['project_id' => $project->id]) !!}
                    </td>
                    <td>
                        {{ $project->authors }}
                    </td>
                    <td>
                        {{ $project->projected_total_modules }}
                    </td>
                    <td>
                        {{ $project->projected_total_pages }}
                    </td>
                    <td>
                        {{ $project->format }}
                    </td>
                    <td>
                        {{ $project->alternative_format }}
                    </td>
                    <td>
                        {{ $project->complementary_materials }}
                    </td>
                    <td>
                        {{ $project->notes }}
                    </td>
                    <td>
                        {{ $project->isbn_number }}
                    </td>
                    <td>
                        {!! link_to_route('proyectos.edit', 'Editar', [$project->id], ['class' => 'btn btn-sm btn-primary']) !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['proyectos.destroy', $project->id]]) !!}

                            {!! Form::submit('Eliminar', array('class'=>'btn btn-sm btn-danger')) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="/proyectos/create" class="btn btn-sm btn-primary">Crear</a>
        </div>
    </div>
</div>

@stop