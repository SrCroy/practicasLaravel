@extends('page.Inicio')
@section('tittle', 'Formulario')

@section('header')
    <h1>Saludo</h1>
@endsection

@section('content')
    <x-CardUser 
        nombre="Cristian Rubio" 
        descripcion="Estudiante de la Ues"
    >
        Hola como estas Cristian
    </x-CardUser>
    <form action="{{route('RecibeForm')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Inserte el nombre</label>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Ingrese la edad</label>
            <input type="text" name="edad">
        </div>
        <button type="submit" class="btn">Enviar</button>
    </form>
@endsection