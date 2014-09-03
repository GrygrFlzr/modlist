<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Changelog extends Eloquent {
	
	public function mod()
	{
		return $this->hasOne('ModVersion','id','type_id');
	}
	
}