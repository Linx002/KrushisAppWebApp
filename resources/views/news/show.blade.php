@extends('layouts.app')

@section('template_title')
    {{ $news->name ?? 'Show News' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row"><h2>Nothing to see here. Go away!</h2>
        </div>
    </section>
@endsection
