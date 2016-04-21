<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('principal.principal');
	}
	public function indexPrincipal()
	{
		return View::make('principal.principal');
	}
	public function indexAbout()
	{
		return View::make('principal.about');
	}
	public function indexActivity()
	{
		return View::make('principal.activity');
	}
	public function indexContacts()
	{
		return View::make('principal.contacts');
	}

}
