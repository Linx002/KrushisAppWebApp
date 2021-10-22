@extends('layouts.app')

@section('template_title')
    Create Dish
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Dish</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dish.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('dish.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
