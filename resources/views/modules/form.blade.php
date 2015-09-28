<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('name', 'Titulo: ') !!}
                {!! Form::text('name', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('project_id', 'Projecto Master: ') !!}
                {!! Form::select('project_id', $projects_list, null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('parent_module_id', 'Modulo Padre: ') !!}
                {!! Form::select('parent_module_id', $parents_module_list, null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('projected_total_pages', 'Paginas Proyectadas: ') !!}
                {!! Form::text('projected_total_pages', null, ['class' => 'validate']) !!}
            </div>
        </div>
        <div class="col-sm-6">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm-3 btn-success form-control']) !!}
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-danger" href="/modulos" role="button">Cancelar</a>
        </div>
    </div>
</div>

@if( $errors->any() )
<hr/>
<div class="alert alert-danger" role="alert">
    <p><strong>Temporal error list</strong></p>
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif