<?php

use Applications\Test\Test;
use Tuxxedo\Di;
use Tuxxedo\Http\Dispatcher;
use Tuxxedo\Http\Router;

require_once __DIR__ . '/../../vendor/autoload.php';

$di = new Di;

$di->register(Router::class, static function() : Router {
	return new Router;
});

$di->register(Dispatcher::class, static function(Di $di) : Dispatcher {
	return new Dispatcher(
		di: $di,
		router: $di->need(Router::class),
		fallback: static function() : void {
			echo 'Route not found';
		},
	);
});

(new Test($di))->run();