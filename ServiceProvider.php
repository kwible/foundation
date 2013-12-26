<?php

namespace Flyer\Foundation;

abstract class ServiceProvider
{	

	public function boot() {}

	abstract public function register();

	public function package($package, $namespace = null, $path = null)
	{
		// Processing views
		

		// Processing routes
		

		// Processing models
		
		
		// Processing controllers
	}
}