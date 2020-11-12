<?php

namespace Applications;

use Tuxxedo\Application;

class Test extends Application
{
	public function run() : void
	{
		printf(
			'Hello World (powered by Tuxxedo Engine %s)%s',
			$this->di->need('version'),
			\PHP_EOL,
		);
	}
}