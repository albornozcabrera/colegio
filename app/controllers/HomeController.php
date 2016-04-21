<?php

use Colegio\Repositories\ProfileRepo;

class HomeController extends BaseController {

	protected $profileRepo;

	public function __construct(ProfileRepo $profileRepo)
	{
		$this->profileRepo = $profileRepo;
	}

	public function index()
	{
<<<<<<< HEAD
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
=======
		return View::make('main/home');	
>>>>>>> 32691e4aa6a63989672b4e1e5254374f13afc32b
	}

}
