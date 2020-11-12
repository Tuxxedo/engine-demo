<?php

use Applications\Test;
use Tuxxedo\Di;
use Tuxxedo\Version;

require_once __DIR__ . '/../../vendor/autoload.php';

$di = Di::init();

$di->register('version', fn() : string => Version::FULL);

(new Test($di))->run();