<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('page_number', 'Numero de Pagina: ') !!}
                {!! Form::text('page_number', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('module_id', 'Modulo: ') !!}
                {!! Form::select('module_id', $module_list, null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('page_stage', 'Estadio de Pagina: ') !!}
                {!! Form::select('page_stage', ['Autor' => 'Autor', 'Edicion' => 'Edicion', 'Diagramacion' => 'Diagramacion', 'Edicion 1ra vuelta' => 'Edicion 1ra vuelta', 'Diagramacion 1ra Vuelta' => 'Diagramacion 1ra Vuelta', 'Edicion 2ra vuelta' => 'Edicion 2ra vuelta', 'Correccion 1ra vuelta' => 'Correccion 1ra vuelta', 'Diagramacion 2ra Vuelta' => 'Diagramacion 2da Vuelta', 'Edicion 3ra vuelta' => 'Edicion 3ra vuelta', 'Correccion 2ra vuelta' => 'Correccion 2ra vuelta', 'Diagramacion 3ra Vuelta' => 'Diagramacion 3ra Vuelta', 'Preprensa' => 'Preprensa', 'Cierre' => 'Cierre'], null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('layout_stage', 'Diagramacion: ') !!}
                {!! Form::select('layout_stage', ['Autor' => 'Autor', 'Edicion' => 'Edicion', 'Diagramacion' => 'Diagramacion', 'Edicion 1ra vuelta' => 'Edicion 1ra vuelta', 'Diagramacion 1ra Vuelta' => 'Diagramacion 1ra Vuelta', 'Edicion 2ra vuelta' => 'Edicion 2ra vuelta', 'Correccion 1ra vuelta' => 'Correccion 1ra vuelta', 'Diagramacion 2ra Vuelta' => 'Diagramacion 2da Vuelta', 'Edicion 3ra vuelta' => 'Edicion 3ra vuelta', 'Correccion 2ra vuelta' => 'Correccion 2ra vuelta', 'Diagramacion 3ra Vuelta' => 'Diagramacion 3ra Vuelta', 'Preprensa' => 'Preprensa', 'Cierre' => 'Cierre'], null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('notes', 'Observaciones: ') !!}
                {!! Form::textarea('notes', null, ['class' => 'validate']) !!}
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