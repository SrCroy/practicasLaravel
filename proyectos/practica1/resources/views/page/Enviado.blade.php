@extends('page.Inicio')
@section('tittle', 'Mostrado Datos')

@section('header')
    <h1>Saludo</h1>
@endsection

@section('content')
    <x-CardUser 
        nombre={{$nombre}} 
        descripcion={{$edad}}
    >
        Hola como estas {{ $nombre }} tu edad es {{ $edad }}
    </x-CardUser>
@endsection