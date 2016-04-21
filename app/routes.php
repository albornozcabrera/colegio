<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('core/principal', 'HomeController@indexPrincipal');
Route::get('core/about', 'HomeController@indexAbout');
Route::get('core/activity', 'HomeController@indexActivity');
Route::get('core/contacts', 'HomeController@indexContacts');
//Route::post('usuario/login', array('uses' => 'UsuarioController@login'));
//Route::get('usuario/salir', array('uses' => 'UsuarioController@salir'));
//Route::group(array('before' => 'auth.login'), function() {});
//Route::get('/', function()
//{
//	return View::make('hello');
//});


// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

