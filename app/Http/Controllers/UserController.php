<?php namespace colegio\Http\Controllers;

class UserController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function index()
	{
		return view('login.login');
	}

}
