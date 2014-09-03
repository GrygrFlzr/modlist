<?php

use Modlist\Controller;

class HomeController extends Controller\Twig {

	public function getIndex()
	{
		$versions = Version::where('homepage',true)
			->orderBy('version_major','version_minor')
			->take(4)
			->with(array('changelogs.mod.meta' => function($query){
				$query->orderBy('created_at','desc');
			}))->get();
		
		return $this->make('home/index.twig', compact('versions'));
	}

}