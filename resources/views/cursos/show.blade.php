@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')

<h1>Bienvenido al curso de {{$curso->name}}</h1>

<a href="{{route('cursos.index')}}">Volver a Cursos </a><br>
<a href="{{route('cursos.edit', $curso->id)}}">Editar curso </a>

<p><strong>Categoria: </strong>{{$curso->categoria}}</p>

<p>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf

    @method('delete')

    <button type="submit">Eliminar</button>
</form>

@endsection

