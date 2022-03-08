@extends('layouts.plantilla')

@section('title', 'Create Curso')

@section('content')

<h1>Bienvenido al creador de cursos</h1>



<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
    <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripción:
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
    <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Categoria:
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
    @error('categoria')
    <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>

    <button type="submit">Enviar</button>

</form>

@endsection

