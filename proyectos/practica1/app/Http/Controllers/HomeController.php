<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('page.Inicio');
    }

    public function mensaje($nombre){
        return view('page.Saludo', ['nombre'=> $nombre]);
    }

    public function mostrarFormulario(){
        return view('page.Formulario');
    }

    public function recibirFormulario(Request $request){
        $nombre = $request->nombre;
        $edad = $request->edad;

        return view('page.Enviado', ['nombre'=> $request->nombre, 'edad'=>$request->edad]);
    }
}
//Agrupar rutas 