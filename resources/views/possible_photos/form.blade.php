<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('name', 'Nombre: ') !!}
                {!! Form::text('name', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                <p>Seleccionado</p>
                <div class="col-sm-3">
                    {!! Form::label('selected', 'Si: ') !!}
                    {!! Form::radio('selected', '1'); !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('selected', 'No: ') !!}
                    {!! Form::radio('selected', '0'); !!}
                </div>
            </div>
            <div class="col-sm-6">
                <p>Descargado</p>
                <div class="col-sm-3">
                    {!! Form::label('downloaded', 'Si: ') !!}
                    {!! Form::radio('downloaded', '1'); !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('downloaded', 'No: ') !!}
                    {!! Form::radio('downloaded', '0'); !!}
                </div>
            </div>
            <div class="col-sm-6">
                <p>Rechazado</p>
                <div class="col-sm-3">
                    {!! Form::label('rejected', 'Si: ') !!}
                    {!! Form::radio('rejected', '1'); !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('rejected', 'No: ') !!}
                    {!! Form::radio('rejected', '1'); !!}
                </div>
            </div>
            <div class="col-sm-6">
                {!! Form::label('url', 'URL: ') !!}
                {!! Form::text('url', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('parent_image_id', 'Imagen Master: ') !!}
                {!! Form::select('parent_image_id', $images_list, null, ['class' => 'validate']) !!}
            </div>
        <div class="col-sm-6">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm-3 btn-success form-control']) !!}
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-danger" href="/fotos_posibles" role="button">Cancelar</a>
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