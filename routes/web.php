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
// 

Route::get('/', function () {
    return view('index');
});

// Login
	Route::get('InicioSesion', 'Auth\LoginController@ShowLoginForm')->name('InicioSesion');
	Route::post('login', 'Auth\LoginController@login')->name('login');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Recuperación de Contraseñas
	Route::get('password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password/reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password/reset');

// Registro de corredores
Route::get('afiliacionCorredor', 'CorredorController@vistaRegistroCorredor')->name('afiliacionCorredor');
Route::get('registroExitoso', 'CorredorController@vistaRegistroExitoso')->name('registroExitoso');
Route::post('RegistrarCorredor', 'CorredorController@RegistrarCorredor')->name('RegistrarCorredor');
Route::get('verPerfil', 'CorredorController@verPerfil')->name('verPerfil');

// Registro de carrera
Route::get('aperturaCarreras', 'CarreraController@registroCarrera')->name('aperturaCarreras');
//Route::get('consultaCarrera', 'CarreraController@consultaCarrera')->name('consultaCarrera');
Route::post('RegistrarCarrera', 'CarreraController@RegistrarCarrera')->name('RegistrarCarrera');
Route::get('consultaCarrera/{id}', 'CarreraController@consultaCarrera')->name('consultaCarrera');
Route::get('listarCarrera', 'CarreraController@listarCarrera')->name('listarCarrera');


// Plan de entrenamiento
Route::get('planEntrenamiento', 'PlanEntrenamientoController@vistaRegistroEntrenamiento')->name('planEntrenamiento');

// Resultados de carreras
Route::get('resultadosCarreras', 'ResultadosController@vistaResultados')->name('resultadosCarreras');
Route::get('verResultados', 'ResultadosController@verResultados')->name('verResultados');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
