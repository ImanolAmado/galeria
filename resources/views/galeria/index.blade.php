@extends('layouts.galeria')
@section('tituloWeb', 'Index')

@section('enlaceCSS')
<link rel="stylesheet" href="{{asset('css/estiloGaleria.css')}}">
@endsection

@section('contenido')

@foreach($obras as $obra)

<a href="/galeria/{{$obra['id']}}">
    <img class="cuadro" 
    src={{asset($obra['imagen'])}} 
    alt="imagen de cuadro"></img>
</a>
@endforeach

@endsection
  




    
