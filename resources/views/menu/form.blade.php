<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Título del Platillo') }}
            {{ Form::text('platilloTitulo', $menu->platilloTitulo, ['class' => 'form-control' . ($errors->has('platilloTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del platillo']) }}
            {!! $errors->first('platilloTitulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        @if ($menu->platilloImagen != '')
            <div class="form-group">
                {{ Form::label('Imagen del platillo') }}<p></p>
                <input class="form-control" type="file" name="platilloImagen" id="platilloImagen"
                    value="{{ $menu->platilloImagen }}" />
            </div>
        @else
            <div class="form-group">
                {{ Form::label('Imagen del platillo') }}<p></p>
                {{ Form::file('platilloImagen', $menu->platilloImagen, ['class' => 'form-control' . ($errors->has('platilloImagen') ? ' is-invalid' : '')]) }}
                {!! $errors->first('platilloImagen', '<div class="invalid-feedback">:message</p>') !!}
            </div>

        @endif
        <div class="form-group">
            {{ Form::label('Descripción del platillo') }}
            {{ Form::textarea('platilloDescripcion', $menu->platilloDescripcion, ['class' => 'form-control' . ($errors->has('platilloDescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción breve del platillo']) }}
            {!! $errors->first('platilloDescripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="row">
            <div class="form-group col">
                {{ Form::label('Precio normal del platillo') }}
                {{ Form::number('platilloPrecio', $menu->platilloPrecio, ['class' => 'form-control' . ($errors->has('platilloPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Precio normal - 47.50']) }}
                {!! $errors->first('platilloPrecio', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="col">
                {{ Form::label('Precio de Oferta del platillo') }}
                {{ Form::number('platilloOferta', $menu->platilloOferta, ['class' => 'form-control' . ($errors->has('platilloOferta') ? ' is-invalid' : ''), 'placeholder' => 'Precio de oferta del platillo - 40.50']) }}
                {!! $errors->first('platilloOferta', '<div class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('platilloStatus') }} <p></p>
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
