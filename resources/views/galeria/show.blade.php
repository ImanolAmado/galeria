@extends('layouts.galeria')
@section('tituloWeb', 'Obra')
@section('enlaceCSS')
<link rel="stylesheet" href="{{asset('css/estiloCuadro.css')}}">
@endsection

@section('contenido')
    <h1>{{$obra['titulo']}}</h1>
    <h3>Artista: {{$obra['artista']}}</h3>
    <img class="imagen" src={{asset($obra['imagen'])}} alt="imagen de cuadro"></img>    
    <h6 id=descripcion>{{$obra['descripcion']}}</h6>
    <a href="{{route('indexGaleria')}}">
        <button id="botonVolver" type="button" class="btn btn-primary">Volver</button>
    </a>
@endsection 