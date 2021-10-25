<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Dish Name') }}
            {{ Form::text('platilloTitulo', $menu->platilloTitulo, ['class' => 'form-control' . ($errors->has('platilloTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Dish name']) }}
            {!! $errors->first('platilloTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
            <div class="form-group">
                {{ Form::label('Photo of the dish') }}<p></p>
                {{ Form::file('platilloImagen', $menu->platilloImagen, ['class' => 'form-control' . ($errors->has('platilloImagen') ? ' is-invalid' : '')]) }}
                {!! $errors->first('platilloImagen', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        <div class="form-group">
            {{ Form::label('Dish description') }}
            {{ Form::textarea('platilloDescripcion', $menu->platilloDescripcion, ['class' => 'form-control' . ($errors->has('platilloDescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Brief description of the dish']) }}
            {!! $errors->first('platilloDescripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="row">
            <div class="form-group col">
                {{ Form::label('Regular price') }}
                {{ Form::number('platilloPrecio', $menu->platilloPrecio, ['class' => 'form-control' . ($errors->has('platilloPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Normal dish price - 47.50']) }}
                {!! $errors->first('platilloPrecio', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="col">
                {{ Form::label('Final offer price') }}
                {{ Form::number('platilloOferta', $menu->platilloOferta, ['class' => 'form-control' . ($errors->has('platilloOferta') ? ' is-invalid' : ''), 'placeholder' => 'Dish offer price - 40.50']) }}
                {!! $errors->first('platilloOferta', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Dish availability') }} <p></p>
            <input type="checkbox" name="platilloStatus" id="platilloStatus" @php
                if ($menu->platilloStatus == '1') {
                    echo 'checked';
                }
            @endphp value=true>
        </div>
        {{-- <div class="form-group">
            {{ Form::label('platilloStatus') }} <p></p>
            {{ Form::checkbox('platilloStatus', $menu->platilloStatus, ['class' => 'form-control' . ($errors->has('platilloStatus') ? ' is-invalid' : '')]) }}
            {!! $errors->first('platilloStatus', '<div class="invalid-feedback">:message</p>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
