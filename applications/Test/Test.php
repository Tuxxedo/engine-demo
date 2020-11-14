<?php

namespace Applications\Test;

use Applications\Test\Controllers\Index;
use Tuxxedo\Application;
use Tuxxedo\Di;
use Tuxxedo\Dispatcher;
use Tuxxedo\Router;
use Tuxxedo\Router\Route;

class Test extends Application
{
	public function __construct(?Di $di = null)
	{
		parent::__construct($di);

		$router = $di->need(Router::class);

		$router->addGet(
			new Route(
				regex: '/news/{id:int:[0-9]+}',
				controller: Index::class,
				action: 'displayNews',
			)
		);

		$router->addGet(
			new Route(
				regex: '/',
				controller: Index::class,
				action: 'hello',
			)
		);
	}

	public function run() : void
	{
		assert($this->di !== null);

		$this->di->get(Dispatcher::class)->dispatch(
			$_SERVER['REQUEST_METHOD'],
			$_SERVER['REQUEST_URI'],
		);
	}
}