@extends('layouts.app')

@section('template_title')
    Create announcement
@endsection

@section('content')
@if(Auth::check())
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">New announcement</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('news.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('news.form')

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
