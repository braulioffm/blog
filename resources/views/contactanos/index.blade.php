@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content')

<h1>Bienvenido al formulario de contacto</h1>

<form action="{{route('contactanos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input  type="text" name="name">
    </label>
    <br>
    @error('name')
    <br>
        <small>*{{$message}}</small>
    @enderror

    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
    <br>
        <small>*{{$message}}</small>
    @enderror

    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
    <br>
    @error('mensaje')
    <br>
        <small>*{{$message}}</small>
    @enderror
    


    <button type="submit">Enviar mensaje</button>
</form>

@if (session('info'))

    <script>
        alert("{{session('info')}}")
    </script>
    
@endif


@endsection

