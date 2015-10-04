<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('image_sort', 'Tipo de imagen: ') !!}
                {!! Form::select('image_sort', ['Foto' => 'Foto', 'Ilustrador' => 'Ilustrador', 'Montaje' => 'Montaje', '3D' => '3D', 'Vector' => 'Vector'], null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('assigned_to', 'Asignacion: ') !!}
                {!! Form::text('assigned_to', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('stage', 'Estadio: ') !!}
                {!! Form::select('stage', ['Busqueda' => 'Busqueda', 'Seleccion' => 'Seleccion', 'Bocetao' => 'Boceto', 'Color' => 'Color', 'Descarga' => 'Descarga', 'Terminacion' => 'Terminacion', 'Retoque' => 'Retoque', 'Correccion' => 'Correccion'], null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('request', 'Pedido: ') !!}
                {!! Form::textarea('request', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('page_id', 'Pagina: ') !!}
                {!! Form::select('page_id', $page_list, null, ['class' => 'validate']) !!}
            </div>
        </div>
        <div class="col-sm-6">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm-3 btn-success form-control']) !!}
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-danger" href="/imagenes" role="button">Cancelar</a>
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