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
                                    New entry
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>####</th>

                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Categoría</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $n)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $n->noticiaTitulo }}</td>
                                            <td>{{ $n->noticiaTexto }}</td>
                                            <td>{{ $n->noticiaTipo }}</td>

                                            <td>
                                                <form action="{{ route('news.destroy', $n->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('news.show', $n->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('news.edit', $n->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $news->links() !!}
            </div>
        </div>
    </div>
@endsection
