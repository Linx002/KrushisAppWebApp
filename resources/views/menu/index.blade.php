@extends('layouts.app')

@section('template_title')
    Menu
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Menu') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
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
                            <table class="table table-striped table-hover text-center">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Platillo</th>
                                        <th></th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Precio de oferta</th>
                                        <th></th>

                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $menu->platilloTitulo }}</td>
                                            <td>
                                                {{-- <img src="/public/img/{{ $menu->platilloImagen }}" width="150px"> --}}
                                                <img src="storage/photos/3/Profile_1635037790.jpg" width="150px">
                                            </td>
                                            <td>{{ $menu->platilloDescripcion }}</td>
                                            <td>${{ $menu->platilloPrecio }}</td>
                                            @if ($menu->platilloOferta != 0)
                                                <td>${{ $menu->platilloOferta }}</td>
                                            @else
                                                <td>N/A</td>
                                            @endif
                                            @if ($menu->platilloStatus == '1')
                                                {{-- <td>{{ $menu->platilloStatus }}</td> --}}
                                                <td>Disponible</td>
                                            @else
                                                <td>No Disponible</td>
                                            @endif
                                            <td>
                                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('menu.show', $menu->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('menu.edit', $menu->id) }}"><i
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
                {!! $menus->links() !!}
            </div>
        </div>
    </div>

    <style>
        .text-center {
            text-align: center !important;
        }

    </style>
@endsection
