<?php

namespace Applications\Test\Controllers;

use Tuxxedo\Controller;

class Index extends Controller
{
	public function hello() : void
	{
		echo 'Hello World', \PHP_EOL;
	}
}