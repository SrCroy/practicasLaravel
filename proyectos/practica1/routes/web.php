<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inicio', [HomeController::class,'home']);


Route::controller(HomeController::class)->group(function (){
    Route::get('/inicio', 'home')->name('home');
    Route::get('/mensaje/{nombre}', 'mensaje')->name('home');
    Route::get('/formulario','mostrarFormulario')->name('formulario');
    Route::post('/formulario/enviar','recibirFormulario')->name('RecibeForm');
});