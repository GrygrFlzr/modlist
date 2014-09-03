<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Version extends Eloquent {

	public function mods()
	{
		return $this->hasMany('ModVersion');
	}

	public function changelogs()
	{
		return $this->hasManyThrough('Changelog', 'ModVersion', 'version_id', 'item_id')->where('item_type','mod_versions');
	}

}