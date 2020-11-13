<?php

namespace Applications\Test;

use Applications\Test\Controllers\Index;
use Tuxxedo\Application;
use Tuxxedo\Dispatcher;
use Tuxxedo\Route;

class Test extends Application
{
	public function run() : void
	{
		$this->di->need(Dispatcher::class)->forward(
			new Route(
				controller: Index::class,
				action: 'hello',
			)
		);
	}
}