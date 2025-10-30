@extends('page.Inicio')
@section('tittle', 'Saludo')

@section('header')
    <h1>Saludo</h1>
@endsection

@section('content')
    <x-CardUser 
        nombre="Cristian Rubio" 
        descripcion="Estudiante de la Ues"
    >
        Hola como estas {{ $nombre }}
    </x-CardUser>
@endsection