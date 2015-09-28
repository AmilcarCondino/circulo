<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('name', 'Titulo: ') !!}
                {!! Form::text('name', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('authors', 'Autores: ') !!}
                {!! Form::text('authors', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('projected_total_modules', 'Modulos Principales Proyectados: ') !!}
                {!! Form::text('projected_total_modules', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('projected_total_pages', 'Paginas Totales Proyectadas: ') !!}
                {!! Form::text('projected_total_pages', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('format', 'Formato: ') !!}
                {!! Form::text('format', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('alternative_format', 'Formato Alternativo: ') !!}
                {!! Form::text('alternative_format', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('complementary_materials', 'Materiales Complementarios: ') !!}
                {!! Form::textarea('complementary_materials', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('notes', 'Observaciones: ') !!}
                {!! Form::textarea('notes', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('isbn_number', 'ISBN: ') !!}
                {!! Form::text('isbn_number', null, ['class' => 'validate']) !!}
            </div>

        </div>
        <div class="col-sm-6">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm-3 btn-success form-control']) !!}
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-danger" href="/pacientes" role="button">Cancelar</a>
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