@extends('layouts.app')

@section('template_title')
    Update dish
@endsection

@section('content')
@if(Auth::check())
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update/Modifiy dish</span>
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
@else
<h1>You need to login to see this content.</h1>
@endif
@endsection
