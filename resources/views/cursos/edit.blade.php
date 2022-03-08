@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')

<h1>Estas editando el curso {{$curso->name}}</h1>


<form action="{{route('cursos.update', $curso)}}" method="post">

    @csrf

    @method('put')

    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label><br><br>
    <label>
        Descripción:
        <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
    </label><br><br>
    <label>
        Categoria:
        <input type="text" name="categoria" value="{{$curso->categoria}}">
    </label><br><br>

    <button type="submit">Enviar</button>

</form>
@endsection

