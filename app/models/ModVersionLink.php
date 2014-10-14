<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ModVersionLink extends Eloquent {

	public function link()
	{
		return $this->hasOne('Link','id','link_id');
	}

}