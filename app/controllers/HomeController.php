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
