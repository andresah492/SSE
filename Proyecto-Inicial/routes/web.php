<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/perfil', function () {
    return view('perfil.index', compact('notes'));
});

Route::get('perfil/fpersonal', function() {
    return view('perfil.fPersonal');
});

Route::get('perfil/experiencia', function() {
    return view('perfil.experiencia');
});

Route::get('perfil/intereses', function() {
    return view('perfil.intereses');
});

Route::get('perfil/ofertaslab', function() {
    return view('perfil.ofertaslab');
});

Route::get('/tabuladorSalarios', function(){
	return view('egresados.TabuladorSalarios');
});

Route::get('/eventosUTM', function(){
	return view('egresados.EventosUtm');
});