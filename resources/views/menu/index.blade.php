@extends('layouts.app')

@section('template_title')
    Menu
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <img class="center" src="img/menu-banner.png" alt="Gallery Images" width="30%">
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
                            </div>{{-- float-right --}}
                            @endauth
                        </div>{{-- style = "display:flex..." --}}
                    </div>{{-- card-header --}}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>{{-- alert --}}
                    @endif
                    <div class="card-body">
                        <section> {{--APPETIZERS--}}
                            <details>
                                <summary>Appetizers</summary>
                                    <br>
                                    <div class="card-deck">
                                    @foreach ($menus as $menu)
                                        @if($menu->platilloTipo == "Appetizers")
                                            <div class="card" style="max-width: 30%">
                                                <img class="card-img-top" src="/photos/{{$menu->id}}/{{$menu->platilloImagen}}" alt="Gallery Images">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $menu->platilloTitulo }}</h4>
                                                    <p class="card-text">{{ $menu->platilloDescripcion }}</p>
                                                    @if ($menu->platilloOferta != null || $menu->platilloOferta != "0")
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white"><del>${{ $menu->platilloPrecio }}</del></p>
                                                        <p class="btn btn-lg btn-circle btn-success btn-outline-new-dark">${{ $menu->platilloOferta }}</p>
                                                    @else
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white">${{ $menu->platilloPrecio }}</p>
                                                    @endif
                                                    @auth
                                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('menu.edit', $menu->id) }}"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                    </form>
                                                    @endauth
                                                </div> {{-- card-body --}}
                                            </div> {{-- card --}}
                                        @endif
                                    @endforeach
                                </div>{{-- card-deck --}}
                            </details>
                        </section>
                        <section>{{--MAIN DISHES--}}
                            <details>
                                <summary>Main Dishes</summary>
                                    <br>
                                    <div class="card-deck">
                                    @foreach ($menus as $menu)
                                        @if($menu->platilloTipo == "Main Dishes")
                                            <div class="card" style="max-width: 30%">
                                                <img class="card-img-top" src="/photos/{{$menu->id}}/{{$menu->platilloImagen}}" alt="Gallery Images">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $menu->platilloTitulo }}</h4>
                                                    <p class="card-text">{{ $menu->platilloDescripcion }}</p>
                                                    @if ($menu->platilloOferta != null || $menu->platilloOferta != "0")
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white"><del>${{ $menu->platilloPrecio }}</del></p>
                                                        <p class="btn btn-lg btn-circle btn-success btn-outline-new-dark">${{ $menu->platilloOferta }}</p>
                                                    @else
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white">${{ $menu->platilloPrecio }}</p>
                                                    @endif
                                                    @auth
                                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('menu.edit', $menu->id) }}"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                    </form>
                                                    @endauth
                                                </div> {{-- card-body --}}
                                            </div> {{-- card --}}
                                        @endif
                                    @endforeach
                                </div>{{-- card-deck --}}
                            </details>
                        </section>
                        <section>{{--DESSERTS--}}
                            <details>
                                <summary>Desserts</summary>
                                    <br>
                                    <div class="card-deck">
                                    @foreach ($menus as $menu)
                                        @if($menu->platilloTipo == "Desserts")
                                            <div class="card" style="max-width: 30%">
                                                <img class="card-img-top" src="/photos/{{$menu->id}}/{{$menu->platilloImagen}}" alt="Gallery Images">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $menu->platilloTitulo }}</h4>
                                                    <p class="card-text">{{ $menu->platilloDescripcion }}</p>
                                                    @if ($menu->platilloOferta != null || $menu->platilloOferta != "0")
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white"><del>${{ $menu->platilloPrecio }}</del></p>
                                                        <p class="btn btn-lg btn-circle btn-success btn-outline-new-dark">${{ $menu->platilloOferta }}</p>
                                                    @else
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white">${{ $menu->platilloPrecio }}</p>
                                                    @endif
                                                    @auth
                                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('menu.edit', $menu->id) }}"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                    </form>
                                                    @endauth
                                                </div> {{-- card-body --}}
                                            </div> {{-- card --}}
                                        @endif
                                    @endforeach
                                </div>{{-- card-deck --}}
                            </details>
                        </section>
                        <section>{{--DRINKS--}}
                            <details>
                                <summary>Drinks</summary>
                                    <br>
                                    <div class="card-deck">
                                    @foreach ($menus as $menu)
                                        @if($menu->platilloTipo == "Drinks")
                                            <div class="card" style="max-width: 30%">
                                                <img class="card-img-top" src="/photos/{{$menu->id}}/{{$menu->platilloImagen}}" alt="Gallery Images">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $menu->platilloTitulo }}</h4>
                                                    <p class="card-text">{{ $menu->platilloDescripcion }}</p>
                                                    @if ($menu->platilloOferta != null || $menu->platilloOferta != "0")
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white"><del>${{ $menu->platilloPrecio }}</del></p>
                                                        <p class="btn btn-lg btn-circle btn-success btn-outline-new-dark">${{ $menu->platilloOferta }}</p>
                                                    @else
                                                        <p class="btn btn-lg btn-circle btn-danger btn-outline-new-white">${{ $menu->platilloPrecio }}</p>
                                                    @endif
                                                    @auth
                                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('menu.edit', $menu->id) }}"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                    </form>
                                                    @endauth
                                                </div> {{-- card-body --}}
                                            </div> {{-- card --}}
                                        @endif
                                    @endforeach
                                </div>{{-- card-deck --}}
                            </details>
                        </section>
                    </div>{{-- card-body --}}
                </div>{{-- card --}}
                {!! $menus->links() !!}
            </div>{{-- col-sm-12 --}}
        </div>{{-- row --}}
    </div>{{-- Container-fluid --}}

@endsection
