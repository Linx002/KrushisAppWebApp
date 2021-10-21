@extends('layouts.app')

@section('template_title')
    Dish
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dish') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dishes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Platillotitulo</th>
										<th>Platilloimagen</th>
										<th>Platillodescripcion</th>
										<th>Platilloprecio</th>
										<th>Platillooferta</th>
										<th>Platillostatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dishes as $dish)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dish->platilloTitulo }}</td>
											<td>{{ $dish->platilloImagen }}</td>
											<td>{{ $dish->platilloDescripcion }}</td>
											<td>{{ $dish->platilloPrecio }}</td>
											<td>{{ $dish->platilloOferta }}</td>
											<td>{{ $dish->platilloStatus }}</td>

                                            <td>
                                                <form action="{{ route('dishes.destroy',$dish->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dishes.show',$dish->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dishes.edit',$dish->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dishes->links() !!}
            </div>
        </div>
    </div>
@endsection
