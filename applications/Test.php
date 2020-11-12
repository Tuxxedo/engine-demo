<?php

namespace Applications;

use Tuxxedo\Application;
use Tuxxedo\Di;
use Tuxxedo\Version;

class Test extends Application
{
	public function __construct()
	{
		$di = Di::init();
		$di->register('version', fn() : string => Version::FULL);

		parent::__construct($di);
	}

	public function run() : void
	{
		printf(
			'Hello World (powered by Tuxxedo Engine %s)%s',
			$this->di->need('version'),
			\PHP_EOL,
		);
	}
}