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
		return View::make('main/home');	
	}

}
