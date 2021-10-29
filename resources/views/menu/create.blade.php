@extends('layouts.app')

@section('template_title')
    Add dish to menu
@endsection

@section('content')
    @if(Auth::check())    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Add dish form</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('menu.store') }}" role="form" enctype="multipart/form-data">
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
