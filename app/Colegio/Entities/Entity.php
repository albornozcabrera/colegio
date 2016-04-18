<?php

namespace colegio\Entities;

use Illuminate\Database\Eloquent\Model;

class Entity extends \Eloquent{
	
	public static function getClass()
	{
		return get_class(new static);
	}
}