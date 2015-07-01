<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('contact','PagesController@contact');

Route::get('about','PagesController@about');

Route::get('home', 'HomeController@index');

Route::get('estudiantes','EstudiantesController@index');
Route::get('estudiantes/{id}','EstudiantesController@show');


Route::get('administrador','AdministradorController@administrador');
Route::get('administrador/campus','AdministradorController@campus');

Route::get('administrador/crear-campus','AdministradorController@crear_campus');
Route::post('campus','AdministradorController@store');
Route::get('administrador/crear-campus/exito','AdministradorController@exito');

Route::get('administrador/campus/editar-campus/{id}','AdministradorController@edit');
Route::put('administrador/campus/editar-campus/{id}','AdministradorController@update');
Route::get('administrador/campus/editar-campus/{id}/actualizado','AdministradorController@actualizado');

Route::get('administrador/campus/asignar-encargado/{id}','AdministradorController@asignar');
Route::put('administrador/campus/asignar-encargado/{id}','AdministradorController@singleUpdate');
Route::get('administrador/campus/asignar-encargado/{id}/actualizado','AdministradorController@encargadoActualizado');

Route::get('encargado','EncargadoController@index');
Route::get('encargado/buscar','EncargadoController@campus');
Route::get('encargado/campus-a-cargo','EncargadoController@findCampus');

Route::get('encargado/campus-a-cargo/{id}','EncargadoController@salas');

Route::get('encargado/salas/editar/{id}','EncargadoController@editar');
Route::put('encargado/salas/editar/{id}','EncargadoController@update');
Route::get('encargado/salas/editar/{id}/editada-con-exito','EncargadoController@actualizada');

Route::get('encargado/crear-curso/{id}','EncargadoController@crear_curso');
Route::post('curso','EncargadoController@store');
Route::get('encargado/crear-curso/exito','EncargadoController@exito');
















Route::controllers([
    //'estudiantes' => 'EstudiantesController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('example', function () {

    return view('examples.template');

});