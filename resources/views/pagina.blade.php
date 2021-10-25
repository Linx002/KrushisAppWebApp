@extends('layouts.app')

@section('content')
@php
    $CarpetaFotos = storage_path('photos');
@endphp
    <h1>Hola mundo</h1>
    <h1><a href="/news">Noticias</a></h1>
    <h1><a href="/menu">Menu</a></h1>
    <h1><a href="/contact">Contacto</a></h1>
    <h2>$carpetaFotos</h2>
    <img src="storage\photos\1\hamburguesa.jpg">
@endsection
