@extends('layouts.app')

@section('template_title')
    Editar platillo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar platillo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('menu.update', $menu->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('menu.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
