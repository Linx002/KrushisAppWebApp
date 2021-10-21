@extends('layouts.app')

@section('template_title')
    {{ $news->name ?? 'Show News' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show News</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Noticiatitulo:</strong>
                            {{ $news->noticiaTitulo }}
                        </div>
                        <div class="form-group">
                            <strong>Noticiatexto:</strong>
                            {{ $news->noticiaTexto }}
                        </div>
                        <div class="form-group">
                            <strong>Noticiatipo:</strong>
                            {{ $news->noticiaTipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
