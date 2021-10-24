@extends('layouts.app')

@section('template_title')
    {{ $menu->name ?? 'Show Menu' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Menu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Platillotitulo:</strong>
                            {{ $menu->platilloTitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Platilloimagen:</strong>
                            {{ $menu->platilloImagen }}
                        </div>
                        <div class="form-group">
                            <strong>Platillodescripcion:</strong>
                            {{ $menu->platilloDescripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Platilloprecio:</strong>
                            {{ $menu->platilloPrecio }}
                        </div>
                        <div class="form-group">
                            <strong>Platillooferta:</strong>
                            {{ $menu->platilloOferta }}
                        </div>
                        <div class="form-group">
                            <strong>Platillostatus:</strong>
                            {{ $menu->platilloStatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
