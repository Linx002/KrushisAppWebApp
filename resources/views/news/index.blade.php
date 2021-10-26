@extends('layouts.app')

@section('template_title')
    News
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                News
                            </span>
                            <div class="float-right">
                                <a href="{{ route('news.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Create announcement
                                </a>
                            </div>
                        </div>
                    </div>{{-- card-header --}}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-group">
                        @foreach ($news as $n)
                        <div class="card mb-3" style="max-heigth: 120px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                @switch($n->noticiaTipo)
                                @case("0"){{-- Offers --}}
                                    <img src="/photos/news/offers.jpg" class="img-fluid rounded-start" alt="Check out our offers!" width="250px">
                                    @break
                                @case("1"){{-- Job Opportunities --}}
                                    <img src="/photos/news/jobOpportunity.jpg" class="img-fluid rounded-start" alt="Join our team!" width="250px">
                                    @break
                                @case("2"){{-- Schedule Changes --}}
                                    <img src="/photos/news/scheduleChanges.jpg" class="img-fluid rounded-start" alt="Schedule Changes." width="250px">
                                    @break
                                @case("3"){{-- Menu Changes --}}
                                    <img src="/photos/news/menuChanges.jpg" class="img-fluid rounded-start" alt="Our menu has changed." width="250px">
                                    @break
                                @default
                                    <img src="/img/KrushisLogo.png" class="img-fluid rounded-start" width="250px">
                                @endswitch
                                </div>{{-- col-md-4 --}}
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $n->noticiaTitulo }}</h5>
                                    <p class="card-text">{{ $n->noticiaTexto }}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <form action="{{ route('news.destroy', $n->id) }}" method="POST">
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('news.edit', $n->id) }}"><i
                                                class="fa fa-fw fa-edit"></i>Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-fw fa-trash"></i>Delete</button>
                                    </form>
                                </div>{{-- card-body --}}
                            </div>{{-- col-md-8 --}}
                            </div>{{-- row g-0 --}}
                        </div>{{-- card mb-3 --}}
                    </div>
                            @endforeach
                {!! $news->links() !!}
                </div>{{-- card --}}
            </div>{{-- col-sm-12 --}}
        </div>{{-- row --}}
    </div>{{-- container-fluid --}}
@endsection
