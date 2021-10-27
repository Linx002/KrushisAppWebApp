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
                            @auth
                            <div class="float-right">
                                <a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Add Dish') }}
                                </a>
                            </div>
                            @endauth
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
                                        <th>###</th>

                                        <th>Dish name</th>
                                        <th></th>
                                        <th>Description</th>
                                        <th>Regular price</th>
                                        <th>Offer price</th>
                                        <th></th>
                                        @auth
                                        <th>Operations</th>
                                        @endauth
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $menu->platilloTitulo }}</td>
                                            <td>
                                                {{-- <img src="/public/img/{{ $menu->platilloImagen }}" width="150px"> --}}
                                                {{-- la carpeta que se utiliza es /public/photos/ --}}
                                                <img src="/photos/{{$menu->id}}/{{$menu->platilloImagen}}" width="150px">
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
                                                <td>Available</td>
                                            @else
                                                <td>Not Available</td>
                                            @endif
                                            <td>
                                                @auth
                                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('menu.show', $menu->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('menu.edit', $menu->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i>Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>Delete</button>
                                                </form>
                                                @endauth
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

@endsection
