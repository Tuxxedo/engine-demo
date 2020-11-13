<?php

use Applications\Test\Test;
use Tuxxedo\Di;
use Tuxxedo\Dispatcher;

require_once __DIR__ . '/../../vendor/autoload.php';

$di = Di::init();
$di->register(Dispatcher::class, static function(Di $di) : Dispatcher {
	return new Dispatcher($di);
});

(new Test($di))->run();