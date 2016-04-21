<?php

namespace Colegio\Entities;

class Profile extends Entity {

	public function user(){
		return $this->hasOne(User::get_class());
	}
}