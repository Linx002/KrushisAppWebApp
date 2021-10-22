@extends('layouts.app')

@section('template_title')
    {{ $dish->name ?? 'Show Dish' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dish</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dish.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Platillotitulo:</strong>
                            {{ $dish->platilloTitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Platilloimagen:</strong>
                            {{ $dish->platilloImagen }}
                        </div>
                        <div class="form-group">
                            <strong>Platillodescripcion:</strong>
                            {{ $dish->platilloDescripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Platilloprecio:</strong>
                            {{ $dish->platilloPrecio }}
                        </div>
                        <div class="form-group">
                            <strong>Platillooferta:</strong>
                            {{ $dish->platilloOferta }}
                        </div>
                        <div class="form-group">
                            <strong>Platillostatus:</strong>
                            {{ $dish->platilloStatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
