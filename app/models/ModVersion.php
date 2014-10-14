<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ModVersion extends Eloquent {

	public function meta()
	{
		return $this->hasOne('Mod','id','mod_id');
	}

	public function authors()
	{
		return $this->belongsToMany('Author','mod_authors','mod_version_id','author_id');
	}

	public function dependencies()
	{
		return $this->belongsToMany('ModVersion','mod_version_dependencies','mod_version_id','dependency_id');
	}

	public function types()
	{
		return $this->belongsToMany('Type','mod_version_types','mod_version_id','type_id');
	}

	public function links()
	{
		return $this->belongsToMany('Link','mod_version_links','mod_version_id','link_id');
	}

	public function changelogs()
	{
		return $this->hasMany('Changelog','item_id','mod_version_id')->where('item_type','mod_versions');
	}

}