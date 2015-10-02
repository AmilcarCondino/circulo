<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('name', 'Nombre: ') !!}
                {!! Form::text('name', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-xs-4">
                <p>Seleccionado</p>
                <div class="btn-group btn-group-xs btn-group-justified" data-toggle="buttons">
                    <label class="btn btn-default"><input type="radio" name="selected" value="1">
                        <i class="fa fa-check"></i>
                    </label>
                    <label class="btn btn-default"><input type="radio" name="selected" value="0">
                        <i class="fa fa-close"></i>
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <p>Descargado</p>
                <div class="btn-group btn-group-xs btn-group-justified" data-toggle="buttons">
                    <label class="btn btn-default"><input type="radio" name="downloaded" value="1">
                        <i class="fa fa-check"></i>
                    </label>
                    <label class="btn btn-default"><input type="radio" name="downloaded" value="0">
                        <i class="fa fa-close"></i>
                    </label>
                </div>
            </div>
            <div class="col-sm-6">
                {!! Form::label('url', 'URL: ') !!}
                {!! Form::text('url', null, ['class' => 'validate']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('parent_image_id', 'Projecto Master: ') !!}
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