@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{-- <h1> Ta vacio </h1> --}}
        <div class="box box-info padding-1">
            <div class="box-body">
                <form>
                    @csrf
                   <label>Name:</label>
                   <input type="text" id="name" class="text">
                   <label>Email:</label>
                   <input type="email" id="email" class="email">
                </form>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </div>
@endsection
