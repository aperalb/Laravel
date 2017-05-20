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
    return view('welcome');
});

//
Route::get('about', function(){
    return view ('about');
});

Route::get('objectives', function(){
    return view ('objectives');
});

//
Route::get('administrador', function(){
    return view ('auth/register_administrador');
})->name('registraradministrador');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/tipopregunta', 'TipoPreguntaController');

Route::resource('medico', 'MedicoController');

Route::resource('paciente', 'PacienteController');

Route::resource('tratamiento', 'TratamientoController');

Route::resource('admon', 'AdministradorController');

Route::resource('formulario', 'FormularioController');

Route::resource('pregunta','PreguntaController');

Route::get('createupdrs/{id}', 'ResolucionController@createupdrs')->name('resolucion.createupdrs');

Route::get('createbarthel/{id}', 'ResolucionController@createbarthel')->name('resolucion.createbarthel');

Route::get('createedc/{id}', 'ResolucionController@createedc')->name('resolucion.createedc');



Route::resource('resolucion','ResolucionController');

Route::resource('respuesta', 'RespuestaController');



?>