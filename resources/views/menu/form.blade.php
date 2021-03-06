<div class="box box-info padding-1">
    <div class="box-body">
        @if (!$errors->isEmpty())
        <p>{!! $errors->first('platilloTitulo', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloImagen', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloDescripcion', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloPrecio', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloOferta', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloTipo', '<div class="invalid-feedback">:message</div>') !!}</p>
        <p>{!! $errors->first('platilloStatus', '<div class="invalid-feedback">:message</div>') !!}</p>
        @endif

        <div class="form-group">
            {{ Form::label('Dish Name') }}
            {{ Form::text('platilloTitulo', $menu->platilloTitulo, ['class' => 'form-control' . ($errors->has('platilloTitulo') ? ' is-invalid' : ''), 'placeholder' => 'Dish name']) }}
            {!! $errors->first('platilloTitulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    {{ Form::label('Photo of the dish') }}
                        @if ($menu->platilloImagen != "")
                            {{ Form::file('platilloImagen', $menu->platilloImagen, ['class' => 'form-control' . ($errors->has('platilloImagen') ? ' is-invalid' : '')]) }}
                        <div class="col">
                            <label>Current image</label>
                            <img src="/photos/img/{{$menu->platilloImagen}}" width="150px">
                        </div>
                    @else
                            {{ Form::file('platilloImagen', $menu->platilloImagen, ['class' => 'form-control' . ($errors->has('platilloImagen') ? ' is-invalid' : '')]) }}
                    @endif
                    {!! $errors->first('platilloImagen', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="col"><p>A photo is required. You can also submit the logo as a placeholder.</p></div>
                </div>
            </div>
        <div class="form-group">
            {{ Form::label('Dish description') }}
            {{ Form::textarea('platilloDescripcion', $menu->platilloDescripcion, ['class' => 'form-control' . ($errors->has('platilloDescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Brief description of the dish']) }}
            {!! $errors->first('platilloDescripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row col-auto">
            <div class="form-group col col-lg-4">
                {{ Form::label('Regular price') }}<br>
                {{-- <input type="text" name="platilloPrecio" id="platilloPrecio" @if($menu->platilloPrecio != "") value="{{$menu->platilloPrecio}}" @endif> --}}
                {{ Form::Text('platilloPrecio', $menu->platilloPrecio, ['class' => 'form-control' . ($errors->has('platilloPrecio') ? ' is-invalid' : ''), 'placeholder' => 'Normal dish price - 47.50']) }}
                {!! $errors->first('platilloPrecio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col col-lg-4">
                {{ Form::label('Final offer price') }}<br>
                {{-- <input type="text" name="platilloOferta" id="platilloOferta" @if($menu->platilloOferta != "") value="{{$menu->platilloOferta}}" @endif> --}}
                {{ Form::text('platilloOferta', $menu->platilloOferta, ['class' => 'form-control' . ($errors->has('platilloOferta') ? ' is-invalid' : ''), 'placeholder' => 'Dish offer price - 40.50']) }}
                {!! $errors->first('platilloOferta', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col col-lg-4">
                {{ Form::label('Dish type') }}
                {{ Form::select('platilloTipo', array("Appetizers", "Main Dishes", "Desserts", "Drinks","Sides"), $menu->platilloTipo, ['class' => 'form-control' . ($errors->has('platilloTipo') ? ' is-invalid' : '')]) }}
                {!! $errors->first('platilloTipo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col col-lg-4">
                {{ Form::label('Dish availability') }}
                <input type="checkbox" name="platilloStatus" id="platilloStatus" value="1" @php
                    if ($menu->platilloStatus == '1') {
                        echo 'checked';
                    }
                @endphp>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
