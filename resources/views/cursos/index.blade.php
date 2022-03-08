@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<h1>Bienvenido al todos los cursos</h1>

<a href="{{route('cursos.create')}}">Crear curso</a>

<ul>

    @foreach ($cursos as $curso)
        <li><a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a></li>
        
        <small>{{route('cursos.show', $curso)}}</small>
        <br><br>
    @endforeach

</ul>

{{$cursos->links()}}

@endsection

