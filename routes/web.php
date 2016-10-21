<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('inicio', [
    'uses' => 'UsuarioController@menu',
    'as' => 'administrador.inicio'
]);

Route::group(['prefix' => 'administrador'], function () {

	Route::get('empleado/detalle/{id?}', [
                'uses' => 'EmpleadoController@detalle',
                'as' => 'empleado.detalle'
                ]);
    Route::get('representante/detalle/{id?}', [
                'uses' => 'RepresentanteController@detalle',
                'as' => 'representante.detalle'
                ]);
    Route::resource('usuario','UsuarioController');
    Route::resource('empleado','EmpleadoController');
    Route::resource('representante','RepresentanteController');
    Route::resource('parentesco','ParentescoController');
});

Route::get('/', [
    'uses' => 'Auth\LoginController@getLogin',
    'as' => 'administrador.auth.getlogin'
    ]);
Route::post('administrador/login', [
    'uses' => 'Auth\LoginController@postLogin',
    'as' => 'administrador.auth.login'
    ]);
Route::get('administrador/logout', [
    'uses' => 'Auth\LoginController@getLogout',
    'as' => 'administrador.auth.logout'
    ]);
