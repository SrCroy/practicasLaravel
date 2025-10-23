@extends('page.Inicio')
@section('tittle', 'Mi perfil')

@section('header')
    <h1>Titulo de la pagina</h1>
@endsection

@section('content')
    <x-CardUser 
        nombre="Cristian Rubio" 
        descripcion="Estudiante de la Ues"
    >
        Informacion de usuario
    </x-CardUser>
@endsection