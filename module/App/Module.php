<?php
namespace App;

use ToktikBase\ModuleManager\AbstractModule;

class Module extends AbstractModule
{
	public function getDir()
	{
		return __DIR__;
	}

	public function getNamespace()
	{
		return __NAMESPACE__;
	}
}